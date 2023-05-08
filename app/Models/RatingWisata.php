<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RatingWisata extends Model
{
    use HasFactory;

    protected $table = 'rating_wisatas';

    protected $primaryKey = 'id_rating_wisata';

    protected $fillable = [
        'id_rating_wisata', 'id_wisata', 'niilai', 'id_user'
    ];

    public function Wisata(){
        return $this->belongsTo(Wisata::class, 'id_wisata', 'id_wisata');
    }

    public function User(){
        return $this->belongsTo(User::class, 'id_user', 'id_user');
    }
}
