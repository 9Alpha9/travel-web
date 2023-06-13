<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    //
    public function index(){
        return view('dashboard.pages.dashboard')->with(['dashboard' => 'active', 'pageTitle' => 'Dashboard']);
    }
}
