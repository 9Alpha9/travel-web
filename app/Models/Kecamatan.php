<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kecamatan extends Model
{
    use HasFactory;

    protected $table = 'kecamatans';

    protected $primaryKey = 'id';

    protected $fillable = [
        'id', 'regency_id', 'name', 'alt_name', 'latitude', 'longitude'
    ];

    public function Kota(){
        return $this->belongsTo(Kota::class, 'regency_id', 'id');
    }

    public function Wisata(){
        return $this->hasMany(Wisata::class, 'id_kecamatan', 'id');
    }

    public function Alamat() {
        return $this->hasMany(Alamat::class, 'id_kecamatan', 'id_kecamatan');
    }
}