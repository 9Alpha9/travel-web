<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class NilaiWisata extends Model
{
    use HasFactory;

    protected $table = 'nilai_wisatas';

    protected $primaryKey = 'id_nilai_wisata';

    protected $fillable = [
        'id_nilai_wisata', 'id_tipe_wahana', 'id_wisata', 'nilai_wisata'
    ];

    public function TipeWahana(){
        return $this->belongsTo(TipeWahana::class, 'id_tipe_wahana', 'id_tipe_wahana');
    }

    public function Wisata(){
        return $this->belongsTo(Wisata::class, 'id_wisata', 'id_wisata');
    }
}
