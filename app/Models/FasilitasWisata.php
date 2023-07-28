<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FasilitasWisata extends Model
{
    use HasFactory;

    protected $table = 'fasilitas_wisatas';

    protected $primaryKey = 'id_fasilitas_wisata';

    protected $fillable = [
        'id_fasilitas_wisata', 'id_wisata', 'id_kategori_fasilitas'
    ];

    public function Wisata(){
        return $this->belongsTo(Wisata::class, 'id_wisata', 'id_wisata');
    }

    public function KategoriFasilitas(){
        return $this->belongsTo(KategoriFasilitas::class, 'id_kategori_fasilitas', 'id_kategori_fasilitas');
    }
}
