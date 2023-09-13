<?php

namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use App\Models\Wisata;
use Illuminate\Http\Request;

//TAMPILAN DITMAPILKAN 8 AJA
class HomePagesController extends Controller
{
    public function index() {
        return view('components.homepages')->with(['homepages']);
    }
    public function landingPage() {
        // $wisata = Wisata::with('GambarWisata', function ($query){
        //     $query->orderBy('created_at', 'desc');
        // })->orderBy('created_at', 'desc')->get();
        $wisata = Wisata::with('GambarWisata')->orderBy('created_at', 'desc')->get();
        // dd($wisata);
        return view('components/landingpages/home')->with(['home' => 'active', 'pageTitle' => 'Travel', 'wisata' => $wisata]);
    }
}
