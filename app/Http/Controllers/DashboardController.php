<?php

namespace App\Http\Controllers;

use App\Models\Kecamatan;
use App\Models\Kota;
use App\Models\User;
use App\Models\Wisata;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    //
    public function index(){
        $wisata = Wisata::get();
        $idProvince = 35;
        $kota = Kota::withCount('kecamatan')->where('province_id', $idProvince)->get();
        $user = User::where('user_type', 'Admin')->get();
        return view('dashboard.pages.dashboard')->with(['dashboard' => 'active', 'pageTitle' => 'Dashboard', 'wisata' => $wisata, 'kota' => $kota, 'pengelolah' => $user]);
    }
}