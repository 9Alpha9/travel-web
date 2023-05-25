<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OrderTicket extends Model
{
    use HasFactory;

    protected $table = 'order_tickets';

    protected $primaryKey = 'id_ticket';

    protected $fillable = [
        'id_ticket', 'id_wisata', 'id_pelanggan', 'jumlah_orang', 'tanggal_tiket', 'snap_token', 'payment_status', 'total_harga', 'diskon'
    ];

    public function Wisata(){
        return $this->belongsTo(Wisata::class, 'id_wisata', 'id_wisata');
    }

    public function User(){
        return $this->belongsTo(User::class, 'id_pelanggan', 'id_user');
    }
}