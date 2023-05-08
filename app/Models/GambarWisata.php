<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class GambarWisata extends Model
{
    use HasFactory;

    protected $table = 'gambar_wisatas';

    protected $primaryKey = 'id_gambar_wisata';

    protected $fillable = [
        'id_gambar_wisata', 'id_wisata', 'nama_gambar', 'keterangan_gambar'
    ];

    public function Wisata(){
        return $this->belongsTo(Wisata::class, 'id_wisata', 'id_wisata');
    }
}
