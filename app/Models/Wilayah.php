<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Wilayah extends Model
{
    use HasFactory;

    protected $table = 'wilayahs';

    protected $primaryKey = 'id';

    protected $fillable = [
        'id', 'name', 'alt_name', 'latitude', 'longitude'
    ];

    public function Kota(){
        return $this->hasMany(Kota::class, 'province_id', 'id');
    }
}
