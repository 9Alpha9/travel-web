<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Aksesbilitas extends Model
{
    use HasFactory;

    protected $table = 'aksesbilitas';

    protected $primaryKey = 'id_aksesbilitas';

    protected $fillable = [
        'id_wisata', 'nama_aksesbilitas', 'nilai'
    ];

    public function Wisata(){
        return $this->hasMany(Wisata::class, 'id_aksesbilitas', 'id_aksesbilitas');
    }
}
