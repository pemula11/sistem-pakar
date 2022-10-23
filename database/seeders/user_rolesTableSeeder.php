<?php

namespace Database\Seeders;

use Carbon\Carbon;
use App\Models\User_roles;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class user_rolesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //

        Schema::disableForeignKeyConstraints();
        User_roles::truncate();
        Schema::enableForeignKeyConstraints();

        
        $data = [
            ['nama' => 'admin',],
            ['nama' => 'moderator',],
            ['nama' => 'user',],
            ['nama' => 'guest',],

         
        ];

        foreach ($data as  $value) {
            # code...
            User_roles::insert([
                'name' => $value['nama'],
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ]);

        }
    }
}
