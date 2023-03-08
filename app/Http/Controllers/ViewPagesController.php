<?php

namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ViewPagesController extends Controller
{
    //
    public function viewPages(){
        return view('components.pages.viewPages.defaultViewPages')->with(['viewpages' => 'active']);
    }
}