<?php

namespace App\Http\Controllers;

use App\Models\Struktur;
use Illuminate\Http\Request;

class StrukturController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = struktur::all();
        return view('struktur.index', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('struktur.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = Struktur::create($request->all());
        if ($request->hasFile('foto_struktur')) {
            $foto = $request->file('foto_struktur')->store('foto_struktur', 'public');
            $data->foto_struktur = $foto;
            $data->save();
        }
        return redirect()->route('dashboard.struktur');
    }

    /**
     * Display the specified resource.
     */
    public function show(Struktur $struktur)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Struktur $struktur)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Struktur $struktur)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Struktur $struktur)
    {
        //
    }
}
