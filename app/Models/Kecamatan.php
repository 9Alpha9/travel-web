<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kecamatan extends Model
{
    use HasFactory;

    protected $table = 'kecamatans';

    protected $primaryKey = 'id_kecamatan';

    protected $fillable = [
        'id_kecamatan', 'nama_kecamatan', 'id_kota'
    ];

    public function Kota(){
        return $this->belongsTo(Kota::class, 'id_kota', 'id_kota');
    }

    public function Wisata(){
        return $this->hasMany(Wisata::class, 'id_wisata', 'id_wisata');
    }

}