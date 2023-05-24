<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class MyBookingController extends Controller
{
    //
    public function index(){
        return view('components/pages/infoPages/bookingInfoPages');
    }
}