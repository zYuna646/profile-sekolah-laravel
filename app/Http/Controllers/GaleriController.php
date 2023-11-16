<?php

namespace App\Http\Controllers;

use App\Models\Galeri;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class GaleriController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = galeri::all();
        return view('galeri.index', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('galeri.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = galeri::create($request->all());
        if ($request->hasFile('foto_galeri')) {
            $foto = $request->file('foto_galeri')->store('foto_galeri', 'public');
            $data->foto_galeri = $foto;
            $data->save();
        }
        return redirect()->route('dashboard.galeri');
    }

    /**
     * Display the specified resource.
     */
    public function show(Galeri $galeri)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Galeri $galeri)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Galeri $galeri)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $data = galeri::find($id);
        $name = $data->foto_kompetensi;
        if($name != null || $name != '') {
            Storage::delete($name);
        }

        $data->delete();
        
        return redirect()->route('dashboard.galeri');
    }
}
