<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\{DetailKompetensi, Kompetensi, Galeri, Prestasi, Staff, Struktur};

class HomeController extends Controller
{
    public function index()
    {
        return view('landing.index');
    }

    public function galeri()
    {
        $galeri = Galeri::all();
        return view('landing.galeri', compact('galeri'));
    }

    public function staff()
    {
        $dataKepalaSekolah = Staff::where('jabatan', 'Kepala Sekolah')->first();
        $dataStaff = Staff::where('jabatan', '!=', 'Kepala Sekolah')->get();
        return view('landing.staff')->with(['kepalaSekolah' => $dataKepalaSekolah, 'staff' => $dataStaff]);
    }
    public function struktur()
    {
        $struktur = Struktur::first();
        return view('landing.struktur', compact('struktur'));
    }
    public function kompetensi()
    {
        $komp_data = Kompetensi::all();
        return view('landing.kompetensi', compact('komp_data'));
    }
    public function detail_kompetensi(string $id)
    {
        $kompetensi = Kompetensi::find($id);
        $detail = DetailKompetensi::where('id_foto', $id)->get();
        return view('landing.detail-kompetensi', compact('kompetensi'))->with(['detail' => $detail]);
    }
    public function prestasi()
    {
        $data = Prestasi::all();
        return view('landing.prestasi')->with(['prestasi' => $data]);
    }
    public function isi()
    {
        return view('landing.isi');
    }
}
