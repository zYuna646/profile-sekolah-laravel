<?php

namespace App\Http\Controllers;

use App\Models\Prestasi;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class PrestasiController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = Prestasi::all();
        return view('prestasi.index', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('prestasi.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = Prestasi::create($request->all());
        if ($request->hasFile('foto_siswa')) {
            $foto = $request->file('foto_siswa')->store('foto_siswa', 'public');
            $data->foto_siswa = $foto;
            $data->save();
        }
        return redirect()->route('dashboard.prestasi');
    }

    /**
     * Display the specified resource.
     */
    public function show(Prestasi $prestasi)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Prestasi $prestasi)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Prestasi $prestasi)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $data = Prestasi::find($id);
        $name = $data->foto_siswa;
        if($name != null || $name != '') {
            Storage::delete($name);
        }

        $data->delete();
        
        return redirect()->route('dashboard.prestasi');
    }
    
}
