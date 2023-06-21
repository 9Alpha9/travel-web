<?php

namespace App\Http\Controllers;

use App\Models\KategoriFasilitas;
use App\Models\Kecamatan;
use App\Models\Kota;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class WisataController extends Controller
{
    //
    public function index(){

    }

    public function create(){
        $fasilitas = KategoriFasilitas::get();
        $kota = Kota::get();
        $kecamatan = Kecamatan::get();
        return view('dashboard.pages.wisataComponent')->with(['wisata' => 'active', 'pageTitle' => 'Wisata', 'fasilitas' => $fasilitas, 'kota' => $kota, 'kecamatan' => $kecamatan]);
    }

    public function show($id){

    }

    public function edit($id){

    }

    public function store(Request $request){
        dd(json_decode($request->listFasilitas));
    }

    public function update(Request $request, $id){

    }

    public function destroy($id){

    }
}
