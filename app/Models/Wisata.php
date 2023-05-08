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
        'id_wisata', 'nama_wisata', 'id_kota', 'id_kategori_wisata', 'id_fasilitas_wisata', 'id_kecamatan'
    ];

    public function Kota(){
        return $this->belongsTo(Kota::class, 'id_kota', 'id_kota');
    }

    public function KategoriWisata(){
        return $this->belongsTo(KategoriWisata::class, 'id_kategori_wisata', 'id_kategori_wisata');
    }

    public function FasilitasWisata(){
        return $this->belongsTo(FasilitasWisata::class, 'id_fasilitas_wisata', 'id_fasilitas_wisata');
    }

    public function Kecamatan(){
        return $this->belongsTo(Kecamatan::class, 'id_kecamatan', 'id_kecamatan');
    }

    public function GambarWisata(){
        return $this->hasMany(GambarWisata::class, 'id_gambar_wisata', 'id_gambar_wisata');
    }

    public function RatingWisata(){
        return $this->hasMany(RatingWisata::class, 'id_wisata', 'id_wisata');
    }
}
