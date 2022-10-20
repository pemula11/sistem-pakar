<?php

namespace Database\Seeders;

use Carbon\Carbon;
use App\Models\kerusakan;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class KerusakanTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        kerusakan::truncate();
        $data = [
            ['nama_kerusakan' => 'Layar rusak', 'deskripsi_kerusakan'=> 'layar komputer tidak menyala'],
            ['nama_kerusakan' => 'keyboard kotor', 'deskripsi_kerusakan'=> 'keyboard ketik tidak semestinya '],
            ['nama_kerusakan' => 'harddisk bermasalah', 'deskripsi_kerusakan'=> 'booting lama sekali'],
            ['nama_kerusakan' => 'colling system rusak', 'deskripsi_kerusakan'=> 'kipas mengeluarkan suara keras'],
            ['nama_kerusakan' => 'baterai rusak', 'deskripsi_kerusakan'=> 'daya tidak bisa terisi'],
         
        ];

        foreach ($data as  $value) {
            # code...
            kerusakan::insert([
                'nama_kerusakan' => $value['nama_kerusakan'],
                'deskripsi_kerusakan' => $value['deskripsi_kerusakan'],
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ]);

        }
    }
}
