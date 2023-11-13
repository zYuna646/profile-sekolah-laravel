<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index() {
        return view('landing.index');
    }

    public function galeri(){
        return view('landing.galeri');
    }

    public function staff(){
        return view('landing.staff');
    }
}
