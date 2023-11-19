<?php

namespace App\Http\Controllers;

use App\Models\{User, Galeri, Kompetensi, Prestasi, Staff};

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    //

    public function index()
    {
        $komp = Kompetensi::count();
        $galeri = Galeri::count();
        $prestasi = Prestasi::count();
        $staff = Staff::count();
        return view('dashboard.index', compact('komp', 'galeri', 'prestasi', 'staff'));
    }
    public function indexGuru()
    {
        return view('dashboard.indexGuru');
    }
}
