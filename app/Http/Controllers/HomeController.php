<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){
        return view('Frontend.home');
    }
    public function shopGrid(){
        return view('Frontend.shop');
    }
    public function contact(){
        return view('Frontend.contact');
    }
}

