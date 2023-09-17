<?php

namespace App\Models;

use App\Models\Models\Wilayah;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Wisata;

class Kota extends Model
{
    use HasFactory;

    protected $table = 'kotas';

    protected $primaryKey = 'id';

    protected $fillable = [
        'id', 'province_id', 'name', 'alt_name', 'latitude', 'longitude'
    ];

    public function Wilayah(){
        return $this->belongsTo(Wilayah::class, 'province_id', 'id');
    }

    public function Kecamatan(){
        return $this->hasMany(Kecamatan::class, 'regency_id', 'id');
    }

    public function Wisata(){
        return $this->hasMany(Wisata::class, 'id_kota', 'id');
    }
}