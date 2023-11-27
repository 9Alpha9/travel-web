<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class NilaiKriteria extends Model
{
    use HasFactory;

    protected $table = 'nilai_kriterias';

    protected $primaryKey = 'id_nilai';

    protected $fillable = [
        'id_nilai', 'id_user', 'id_kriteria', 'min', 'max', 'score'
    ];

    public function Kriteria(){
        return $this->belongsTo(Kriteria::class, 'id_kriteria', 'id_kriteria');
    }

    public function User(){
        return $this->belongsTo(User::class, 'id_user', 'id_user');
    }
}
