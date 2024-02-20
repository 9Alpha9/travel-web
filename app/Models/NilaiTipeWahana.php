<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class NilaiTipeWahana extends Model
{
    use HasFactory;

    protected $table = 'nilai_tipe_wahana';

    protected $primaryKey = 'id_nilai';

    protected $fillable = [
        'id_user', 'id_tipe_wahana', 'min', 'max', 'nilai_tipe_wahana'
    ];

    public function User() {
        return $this->belongsTo(User::class, 'id_user', 'id_user');
    }

    public function TipeWahana() {
        return $this->belongsTo(TipeWahana::class, 'id_tipe_wahana', 'id_tipe_wahana');
    }
}