<?php

namespace App\Services\Midtrans;

use Illuminate\Support\Facades\Auth;
use Midtrans\Snap;

class CreateSnapTokenService extends Midtrans
{
    protected $order;

    public function __construct($order)
    {
        parent::__construct();

        $this->order = $order;
    }

    public function getSnapToken()
    {
        $params = [
            'transaction_details' => [
                'order_id' => $this->order->id_ticket,
                'total' => $this->order->total_harga
            ],
            'item_details' => [
                'id' => $this->order->id_wisata,
                'price' => $this->order->wisata->harga,
                'quantity' => $this->order->jumlah_orang,
                'name' => $this->order->wisata->nama_wisata
            ],
            'customer_details' => [
                'first_name' => Auth::user()->full_name,
                'email' => !empty(Auth::user()->email) ? Auth::user()->email : "",
                'phone' => !empty(Auth::user()->mobile_number) ? Auth::user()->mobile_number : ""
            ]
        ];

        $snapToken = Snap::getSnapToken($params);

        return $snapToken;
    }
}
