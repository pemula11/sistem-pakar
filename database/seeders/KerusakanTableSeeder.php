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
            ['kode_kerusakan' => 'K001' ,'nama_kerusakan' => 'Layar rusak', 'deskripsi_kerusakan'=> 'layar komputer tidak menyala'],
            ['kode_kerusakan' => 'K002', 'nama_kerusakan' => 'keyboard kotor', 'deskripsi_kerusakan'=> 'keyboard ketik tidak semestinya '],
            ['kode_kerusakan' => 'K003','nama_kerusakan' => 'harddisk bermasalah', 'deskripsi_kerusakan'=> 'booting lama sekali'],
            ['kode_kerusakan' => 'K004','nama_kerusakan' => 'colling system rusak', 'deskripsi_kerusakan'=> 'kipas mengeluarkan suara keras'],
            ['kode_kerusakan' => 'K005','nama_kerusakan' => 'baterai rusak', 'deskripsi_kerusakan'=> 'daya tidak bisa terisi'],
         
        ];

        foreach ($data as  $value) {
            # code...
            kerusakan::insert([
                'kode_kerusakan' => $value['kode_kerusakan'],
                'nama_kerusakan' => $value['nama_kerusakan'],
                'deskripsi_kerusakan' => $value['deskripsi_kerusakan'],
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ]);

        }
    }
}
