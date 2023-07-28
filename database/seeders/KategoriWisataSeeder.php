<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class KategoriWisataSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('kategori_wisatas')->insert([
            'nama_kategori_wisata' => 'Wisata Edukasi',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s')
        ]);

        DB::table('kategori_wisatas')->insert([
            'nama_kategori_wisata' => 'Wisata Rekreasi',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s')
        ]);

        DB::table('kategori_wisatas')->insert([
            'nama_kategori_wisata' => 'Wisata Bahari',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s')
        ]);

        DB::table('kategori_wisatas')->insert([
            'nama_kategori_wisata' => 'Wisata Alam',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s')
        ]);

        DB::table('kategori_wisatas')->insert([
            'nama_kategori_wisata' => 'Wisata Pasar Grosiran',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s')
        ]);

        DB::table('kategori_wisatas')->insert([
            'nama_kategori_wisata' => 'Wisata Kuliner',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s')
        ]);

        DB::table('kategori_wisatas')->insert([
            'nama_kategori_wisata' => 'Wisata Kebudayaan',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s')
        ]);

        DB::table('kategori_wisatas')->insert([
            'nama_kategori_wisata' => 'Wisata Kesenian',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s')
        ]);

        DB::table('kategori_wisatas')->insert([
            'nama_kategori_wisata' => 'Wisata Tempat Bersejarah',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s')
        ]);

        DB::table('kategori_wisatas')->insert([
            'nama_kategori_wisata' => 'Wisata Pantai',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s')
        ]);

        DB::table('kategori_wisatas')->insert([
            'nama_kategori_wisata' => 'Wisata Pusat Perbelanjaan',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s')
        ]);

        DB::table('kategori_wisatas')->insert([
            'nama_kategori_wisata' => 'Wisata Pulau',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s')
        ]);

    }
}
