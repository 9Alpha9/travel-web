<?php

namespace Database\Seeders;
use Illuminate\Support\Facades\DB;

use Illuminate\Database\Seeder;

class KategoriFasilitasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('kategori_fasilitas')->insert([
            'kategori_fasilitas' => 'Toilet dan Kamar Mandi',
            'keterangan_fasilitas' => 'Toilet umum yang bersih dan tanpa dipungut biaya. Terkecuali pihak lain untuk memungut biaya operasioanl',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s')
        ]);
        DB::table('kategori_fasilitas')->insert([
            'kategori_fasilitas' => 'Tempat Parkir',
            'keterangan_fasilitas' => 'Tempat parkir dengan lahan yang luas untuk menampung beberapa rombongan dengan menggunakan Mobil, Bus, atau Mini Bus.',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s')
        ]);
        DB::table('kategori_fasilitas')->insert([
            'kategori_fasilitas' => 'Restaurant dan Warung Makan',
            'keterangan_fasilitas' => 'Tempat untuk bersantai sambil menikmati makanan lokal sekitar tempat wisata.',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s')
        ]);
        DB::table('kategori_fasilitas')->insert([
            'kategori_fasilitas' => 'Toko Suvenir dan Oleh oleh',
            'keterangan_fasilitas' => 'Tempat untuk mencari suvenir dan oleh oleh dari tempat wisata yang dikunjungi dengan beberapa kearifan lokal, harga termurah, dan produksi anak negeri.',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s')
        ]);
        DB::table('kategori_fasilitas')->insert([
            'kategori_fasilitas' => 'Kotak Pertolongan Pertama (P3K)',
            'keterangan_fasilitas' => 'Jika terjadi hal yang tidak tidak maka tool box siap digunakan untuk keadaan darurat.',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s')
        ]);
        DB::table('kategori_fasilitas')->insert([
            'kategori_fasilitas' => 'Tempat Istirahat',
            'keterangan_fasilitas' => 'Tersedia jika disekitar area tempat wisata untuk menginap dan bermalam bersama keluarga.',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s')
        ]);
        DB::table('kategori_fasilitas')->insert([
            'kategori_fasilitas' => 'Tempat Piknik',
            'keterangan_fasilitas' => 'Area yang pas untuk menikmati udara segar di area tempat wisata dengan menggelar tikar dan bercengkrama dengan sahabat, keluarga, dan teman.',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s')
        ]);
        DB::table('kategori_fasilitas')->insert([
            'kategori_fasilitas' => 'Papan Informasi',
            'keterangan_fasilitas' => 'Tidak perlu khawatir tersesat, terdapat papan informasi untuk anda yang tersesat saat berekreasi dan memerlukan informasi anda dapat membacanya pada papan informasi yang tersedia.',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s')
        ]);
        DB::table('kategori_fasilitas')->insert([
            'kategori_fasilitas' => 'Tanda Petunjuk',
            'keterangan_fasilitas' => 'Tanda petunjuk diperlukan agar anda tidak mudah tersesat saat melakukan perjalanan untuk berkunjung ke lokasi tempat wisata.',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s')
        ]);
        DB::table('kategori_fasilitas')->insert([
            'kategori_fasilitas' => 'Area Panggung atau Pertunjukkan',
            'keterangan_fasilitas' => 'Bagi anda yang ingin menonton pertunjukan yang diadakan oleh pihak pengelolah tempat wisata, anda dapat berkunjung ke panggung atau area pertunjukkan.',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s')
        ]);
        DB::table('kategori_fasilitas')->insert([
            'kategori_fasilitas' => 'Wi-fi Gratis',
            'keterangan_fasilitas' => 'Bagi anda yang melakukan pekerjaan diluar kantor, tidak perlu khawatir dengan koneksi internet.',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s')
        ]);
        DB::table('kategori_fasilitas')->insert([
            'kategori_fasilitas' => 'Penyewaan Alat atau Perlengkapan',
            'keterangan_fasilitas' => 'Bagi anda yang ingin melakukan penyewaan alat atau perlengakapan untuk bermain bisa sekali untuk menyewa alat tersebut dengan harga yang murah.',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s')
        ]);
    }
}
