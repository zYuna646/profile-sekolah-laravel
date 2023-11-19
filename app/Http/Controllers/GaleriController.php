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
    public function show(string $id)
    {
        $galeri = galeri::find($id);
        return view('galeri.show', compact('galeri'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $data = Galeri::find($id);
        return view('galeri.edit', compact('data'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $Galeri = Galeri::find($id);
        $input = $request->all();
        $input['foto_galeri'] = $Galeri->foto_galeri;
        if ($request->hasFile('foto_galeri')) {
            Storage::disk('public')->delete($Galeri->foto_galeri);

            $fotoBaru = Storage::disk('public')->put('images/foto_galeri', $request->file('foto_galeri'));
            $input['foto_galeri'] = $fotoBaru;
        }
        $Galeri->update($input);
        return redirect()->route('dashboard.galeri');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $data = Galeri::find($id);
        $name = $data->foto_galeri;
        if ($name != null || $name != '') {
            Storage::disk('public')->delete($name);
        }

        $data->delete();

        return redirect()->route('dashboard.galeri');
    }
}
