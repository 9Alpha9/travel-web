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
        'id_kriteria', 'kriteria'
    ];

    public function Bobot(){
        return $this->hasMany(BobotKriteria::class, 'id_kriteria', 'id_kriteria');
    }
}
