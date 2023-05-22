<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class InformasiPemesananController extends Controller
{
    public function index(){
        return view('components/pages/infoPages/informationPages');
    }
}