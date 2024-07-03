<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Wisata extends Model
{
    use HasFactory;

    protected $table = 'wisatas';

    protected $primaryKey = 'id_wisata';

    protected $fillable = [
        'id_wisata', 'id_pengelolah', 'harga', 'diskon', 'artikel', 'nama_wisata', 'id_kategori_wisata', 'id_kota', 'id_kecamatan', 'id_aksesbilitas'
    ];

    public function Informasi(){
        return $this->hasMany(Informasi::class, 'id_wisata', 'id_wisata');
    }

    public function User(){
        return $this->belongsTo(User::class, 'id_pengelolah', 'id_user');
    }

    public function OrderTicket(){
        return $this->hasMany(OrderTicket::class, 'id_wisata', 'id_wisata');
    }

    public function KategoriWisata(){
        return $this->belongsTo(KategoriWisata::class, 'id_kategori_wisata', 'id_kategori_wisata');
    }

    public function FasilitasWisata(){
        return $this->hasMany(FasilitasWisata::class, 'id_wisata', 'id_wisata');
    }

    public function Kota(){
        return $this->belongsTo(Kota::class, 'id_kota', 'id');
    }

    public function Kecamatan(){
        return $this->belongsTo(Kecamatan::class, 'id_kecamatan', 'id');
    }

    public function GambarWisata(){
        return $this->hasMany(GambarWisata::class, 'id_wisata', 'id_wisata');
    }

    public function RatingWisata(){
        return $this->hasMany(RatingWisata::class, 'id_wisata', 'id_wisata');
    }

    public function NilaiWisata() {
        return $this->hasMany(NilaiWisata::class, 'id_wisata', 'id_wisata');
    }

    public function Aksesbilitas() {
        return $this->belongsTo(Aksesbilitas::class, 'id_aksesbilitas', 'id_aksesbilitas');
    }

    public function WahanaWisata() {
        return $this->hasMany(WahanaWisata::class, 'id_wisata', 'id_wisata');
    }

    public function JenisWahana() {
        $table = WahanaWisata::select('id_tipe_wahana')->where('id_wisata', $this->id_wisata)->groupBy('id_tipe_wahana')->get();
        return $table;
    }
}