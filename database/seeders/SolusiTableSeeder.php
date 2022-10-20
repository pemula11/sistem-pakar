<?php

namespace Database\Seeders;

use Carbon\Carbon;
use App\Models\solusi;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class SolusiTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        solusi::truncate();
        $data = [
            ['nama_solusi' => 'ganti layar', 'deskripsi_solusi'=> 'layar komputer tidak menyala'],
            ['nama_solusi' => 'bersihkan keyboard', 'deskripsi_solusi'=> 'keyboard ketik tidak semestinya '],
            ['nama_solusi' => 'tambah penyimpaan hardisk', 'deskripsi_solusi'=> 'booting lama sekali'],
            ['nama_solusi' => 'ganti colling system', 'deskripsi_solusi'=> 'kipas mengeluarkan suara keras'],
            ['nama_solusi' => 'cek kualitas baterai', 'deskripsi_solusi'=> 'daya tidak bisa terisi'],
         
        ];

        foreach ($data as  $value) {
            # code...
            solusi::insert([
                'nama_solusi' => $value['nama_solusi'],
                'keterangan_solusi' => $value['deskripsi_solusi'],
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ]);

        }
    }
}
