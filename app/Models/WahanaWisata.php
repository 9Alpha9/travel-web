<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class WahanaWisata extends Model
{
    use HasFactory;

    protected $table = 'wahana_wisatas';

    protected $primaryKey = 'id_wahana_wisatas';

    protected $fillable = [
        'id_tipe_wahana', 'id_wisata', 'nama_wahana', 'deskripsi_wahana'
    ];

    public function Wisata() {
        return $this->belongsTo(Wisata::class, 'id_wisata', 'id_wisata');
    }

    public function TipeWahana() {
        return $this->belongsTo(TipeWahana::class, 'id_tipe_wahana', 'id_tipe_wahana');
    }
}