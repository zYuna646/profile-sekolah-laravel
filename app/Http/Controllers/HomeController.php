<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\{Kompetensi, Galeri};

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
    public function kompetensi(){
        $komp_data = Kompetensi::all();
        return view('landing.kompetensi', compact('komp_data'));
    }
    public function detail_kompetensi(string $id){
        $kompetensi = Kompetensi::find($id);
        return view('landing.detail-kompetensi', compact('kompetensi'));
    }
    public function prestasi(){
        return view('landing.prestasi');
    }
    public function isi(){
        return view('landing.isi');
    }
}
