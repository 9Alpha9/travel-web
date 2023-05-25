<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PaymentWisataController extends Controller
{
    //
    public function index(){
        return view('components/pages/payment/defaultPayment');
    }
}