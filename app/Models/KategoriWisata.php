<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class KategoriWisata extends Model
{
    use HasFactory;

    protected $table = 'kategori_wisatas';

    protected $primaryKey = 'id_kategori_wisata';

    protected $fillable = [
        'id_kategori_wisata', 'nama_kategori_wisata'
    ];

    public function Wisata(){
        return $this->hasMany(Wisata::class, 'id_kategori_wisata', 'id_kategori_wisata');
    }
}