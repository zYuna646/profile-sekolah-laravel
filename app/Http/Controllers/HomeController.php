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
    public function struktur(){
        return view('landing.struktur');
    }
    public function prestasi(){
        return view('landing.prestasi');
    }
}
