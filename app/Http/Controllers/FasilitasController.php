<?php

namespace App\Http\Controllers;

use App\Models\KategoriFasilitas;
use Illuminate\Http\Request;

class FasilitasController extends Controller
{
    public function index(){
        $fasilitas = KategoriFasilitas::get();

        return view('dashboard.pages.fasilitas')->with(['fasilitas' => 'active', 'pageTitle' => 'Fasilitas', 'tableFasilitas' => $fasilitas]);
    }

    public function create(){

    }

    public function show($id){

    }

    public function edit($id){

    }

    public function store(Request $request){
        dd('store');
    }

    public function update(Request $request, $id){
        dd('update');
    }

    public function destroy($id){
        dd('delete');
    }

}