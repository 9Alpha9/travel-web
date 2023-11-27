<?php

namespace App\Http\Controllers;

use App\Models\Kecamatan;
use App\Models\Kota;
use App\Models\User;
use App\Models\Wisata;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    protected $rules, $messages, $page;

    public function __construct() {
        $this->rules = array(
        );
        $this->messages = array(
            'required' => ':attribute harus diisi.',
            'numeric' => ':attribute harus diisi.',
            'string' => ':attribute harus diisi.',
            'between' => ':attribute harus di antara :min - :max',
            'min' => ':attribute minimal :value',
            'max' => ':attribute maksimal :value',
            'digits_between' => 'inputan :attribute harus diantara :min - :max',
            'email' => ':attribute tidak valid!',
        );
        $this->page = array(
            'dashboard' => 'active',
            'pageTitle' => 'Dashboard',
            'sweetalert' => true,
            'sweetalertSuccess' => true,
            'sweetalertError' => true,
            'sweetalertDelete' => true
        );
    }
    //
    public function index(){
        $wisata = Wisata::get();
        $idProvince = 35;
        $kota = Kota::withCount('kecamatan')->where('province_id', $idProvince)->get();
        $user = User::where('user_type', 'Admin')->get();

        $this->page['tableWisata'] = $wisata;
        $this->page['tableKota'] = $kota;
        $this->page['tablePengelolah'] = $user;

        return view('dashboard.pages.dashboard')->with($this->page);
    }
}
