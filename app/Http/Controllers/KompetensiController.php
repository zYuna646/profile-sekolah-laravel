<?php

namespace App\Http\Controllers;

use App\Models\Kompetensi;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class KompetensiController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = Kompetensi::all();
        return view('kompetensi.index', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('kompetensi.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = Kompetensi::create($request->all());
        if ($request->hasFile('foto_kompetensi')) {
            $foto = $request->file('foto_kompetensi')->store('foto_kompetensi', 'public');
            $data->foto_kompetensi = $foto;
            $data->save();
        }
        return redirect()->route('dashboard.kompetensi');
    }

    /**
     * Display the specified resource.
     */
    public function show(Kompetensi $kompetensi)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Kompetensi $kompetensi)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Kompetensi $kompetensi)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $data = Kompetensi::find($id);
        $name = $data->foto_kompetensi;
        if($name != null || $name != '') {
            Storage::delete($name);
        }

        $data->delete();
        
        return redirect()->route('dashboard.kompetensi');
    }
}
