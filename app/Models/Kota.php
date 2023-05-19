<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Wisata;

class Kota extends Model
{
    use HasFactory;

    protected $table = 'kotas';

    protected $primaryKey = 'id_kota';

    protected $fillable = [
        'id_kota', 'nama_kota'
    ];

    public function Wisata(){
        return $this->hasMany(Wisata::class, 'id_kota', 'id_kota');
    }

    public function Kecamatan(){
        return $this->hasMany(Kecamatan::class, 'id_kota', 'id_kota');
    }
}
