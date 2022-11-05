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
            ['kode_solusi' => 'S001', 'nama_solusi' => 'ganti layar', 'deskripsi_solusi'=> 'layar komputer tidak menyala'],
            ['kode_solusi' => 'S002', 'nama_solusi' => 'bersihkan keyboard', 'deskripsi_solusi'=> 'keyboard ketik tidak semestinya '],
            ['kode_solusi' => 'S003', 'nama_solusi' => 'tambah penyimpaan hardisk', 'deskripsi_solusi'=> 'booting lama sekali'],
            ['kode_solusi' => 'S004', 'nama_solusi' => 'ganti colling system', 'deskripsi_solusi'=> 'kipas mengeluarkan suara keras'],
            ['kode_solusi' => 'S005', 'nama_solusi' => 'cek kualitas baterai', 'deskripsi_solusi'=> 'daya tidak bisa terisi'],
         
        ];

        foreach ($data as  $value) {
            # code...
            solusi::insert([
                'kode_solusi' => $value['kode_solusi'],
                'nama_solusi' => $value['nama_solusi'],
                'deskripsi_solusi' => $value['deskripsi_solusi'],
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ]);

        }
        
    }
}
