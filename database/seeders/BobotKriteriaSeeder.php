<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BobotKriteriaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('bobot_kriterias')->insert([
            'id_user' => '1',
            'id_kriteria' => '1',
            'bobot' => '95',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s')
        ]);

        DB::table('bobot_kriterias')->insert([
            'id_user' => '1',
            'id_kriteria' => '2',
            'bobot' => '90',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s')
        ]);

        DB::table('bobot_kriterias')->insert([
            'id_user' => '1',
            'id_kriteria' => '3',
            'bobot' => '85',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s')
        ]);

        DB::table('bobot_kriterias')->insert([
            'id_user' => '1',
            'id_kriteria' => '4',
            'bobot' => '80',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s')
        ]);
    }
}