<?php

namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use App\Models\WahanaWisata;
use App\Models\Wisata;
use Illuminate\Http\Request;

class ViewPagesController extends Controller
{
    //
    public function viewPages($id){
        $wisata = Wisata::with([
            'gambarwisata' => function ($query) {
                $query->orderBy('created_at', 'desc');
            },
            'informasi',
            'wahanawisata',
            'wahanawisata.tipewahana'
        ])->find($id);

        return view('components.pages.viewPages.defaultViewPages')->with(['viewpages' => 'active', 'tableWisata' => $wisata]);
    }
}