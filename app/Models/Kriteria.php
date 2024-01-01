<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kriteria extends Model
{
    use HasFactory;

    protected $table = 'kriterias';

    protected $primaryKey = 'id_kriteria';

    protected $fillable = [
        'id_kriteria', 'kriteria', 'bobot', 'normalisasi'
    ];

    public function Bobot(){
        return $this->hasMany(BobotKriteria::class, 'id_kriteria', 'id_kriteria');
    }

    public function Utility(){
        // return $this->hasMany(UtilityKriteria::class, 'id_kriteria', 'id_kriteria');
    }

    public function NilaiWisata() {
        return $this->hasMany(NilaiWisata::class, 'id_kriteria', 'id_kriteria');
    }
}
