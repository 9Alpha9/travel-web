<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class KategoriFasilitas extends Model
{
    use HasFactory;

    protected $table = 'kategori_fasilitas';

    protected $primaryKey = 'id_kategori_fasilitas';

    protected $fillable = [
        'id_kategori_fasilitas', 'kategori_fasilitas', 'keterangan_fasilitas'
    ];

    public function FasilitasWisata(){
        return $this->hasMany(FasilitasWisata::class, 'id_kategori_fasilitas', 'id_kategori_fasilitas');
    }

}