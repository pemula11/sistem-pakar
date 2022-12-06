<?php

namespace Database\Seeders;

use Carbon\Carbon;
use App\Models\Kategori;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class KategoriSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        Kategori::truncate();

        $data = [
            ['kategori' => 'layar' ],
            ['kategori' => 'motherboard' ],
            ['kategori' => 'keyboard' ],
            ['kategori' => 'hardisk' ],
            ['kategori' => 'baterai' ],
            ['kategori' => 'software' ],

        ];

        foreach ($data as  $value) {
            # code...
            Kategori::insert([
                'kategori' => $value['kategori'],
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ]);

        }
    }
}
