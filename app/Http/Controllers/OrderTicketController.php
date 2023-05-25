<?php

namespace App\Http\Controllers;

use App\Models\OrderTicket;
use App\Models\Wisata;
use Illuminate\Http\Request;
use App\Services\Midtrans\CreateSnapTokenService;
use Illuminate\Support\Facades\Auth;

class OrderTicketController extends Controller
{
    //
    public function show(Request $request, $id)
    {
        $wisata = Wisata::findOrfail($id);
        $orderWisata = OrderTicket::create([
            "id_wisata" => $id,
            "id_pelanggan" => Auth::user()->id_user,
            "jumlah_orang" => $request->jumlahVisitor,
            "tanggal_tiket" => $request->tanggalTiket,
            "payment_status" => 1,
            "total_harga" => ($request->jumlahVisitor * $wisata->harga),
            "diskon" => $wisata->diskon,
            "created_at" => date('Y-m-d H:i:s'),
            "updated_at" => date('Y-m-d H:i:s')
        ]);

        $midtrans = new CreateSnapTokenService($orderWisata);
        $snapToken = $midtrans->getSnapToken();

        $payment = OrderTicket::where('id_ticket', $orderWisata->id_ticket)->update([
            "snap_token" => $snapToken
            // "payment_status" => 2
        ]);

        return response()->compact('orderWisata', 'snapToken');
        // view('orders.show', compact('order', 'snapToken'));
    }
}