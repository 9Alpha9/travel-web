<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BobotKriteria extends Model
{
    use HasFactory;

    protected $table = 'bobot_kriterias';

    protected $primaryKey = 'id_bobot';

    protected $fillable = [
        'id_bobot', 'id_user', 'id_kriteria', 'bobot'
    ];

    public function Kriteria(){
        return $this->belongsTo(Kriteria::class, 'id_kriteria', 'id_kriteria');
    }

    public function User(){
        return $this->belongsTo(User::class, 'id_user', 'id_user');
    }
}
