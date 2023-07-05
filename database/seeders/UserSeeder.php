<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('users')->insert([
            'user_type' => 'superAdmin',
            'email' => 'superadmin@lento.com',
            'full_name' => 'Admin BirentCar',
            'mobile_number' => '081234567891',
            'password' => bcrypt('aduhcantik'),
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s')
        ]);

        DB::table('users')->insert([
            'user_type' => 'Admin',
            'email' => 'admin@lento.com',
            'full_name' => 'Admin Wisata',
            'mobile_number' => '081234567891',
            'password' => bcrypt('makinsayang'),
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s')
        ]);

        DB::table('users')->insert([
            'user_type' => 'Pelanggan',
            'email' => 'pelanggan@lento.com',
            'full_name' => 'Pelanggan',
            'mobile_number' => '081234567891',
            'password' => bcrypt('makindihati'),
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s')
        ]);
    }
}
