<?php

namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use App\Models\Wisata;
use Illuminate\Http\Request;

class ViewPagesController extends Controller
{
    //
    public function viewPages($id){
        $wisata = Wisata::find($id)->get();
        return view('components.pages.viewPages.defaultViewPages')->with(['viewpages' => 'active', 'tableWisata' => $wisata]);
    }
}
