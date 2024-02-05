<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TipeWahana extends Model
{
    use HasFactory;

    protected $table = 'tipe_wahana';

    protected $primaryKey = 'id_tipe_wahana';

    protected $fillable = [
        'nama_tipe_wahana', 'bobot', 'bobot_normalisasi', 'keterangan'
    ];
}