<?php

namespace App\Http\Controllers;

use App\Models\Struktur;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

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
    public function show(string $id)
    {
        $struktur = struktur::find($id);
        return view('struktur.show', compact('struktur'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $data = Struktur::find($id);
        return view('struktur.edit', compact('data'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $Struktur = Struktur::find($id);
        $input = $request->all();
        $input['foto'] = $Struktur->foto;
        if ($request->hasFile('foto_struktur')) {
            Storage::disk('public')->delete($Struktur->foto);
            
            $fotoBaru = Storage::disk('public')->put('images/foto', $request->file('foto'));
            $input['foto_struktur'] = $fotoBaru;
        }
        $Struktur->update($input);
        return redirect()->route('dashboard.struktur');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $data = Struktur::find($id);
        $name = $data->foto;
        if($name != null || $name != '') {
            Storage::disk('public')->delete($name);
        }

        $data->delete();
        
        return redirect()->route('dashboard.struktur');
    }
}
