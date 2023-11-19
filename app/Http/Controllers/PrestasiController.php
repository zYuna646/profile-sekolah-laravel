<?php

namespace App\Http\Controllers;

use App\Models\Prestasi;
use App\Models\Staff;
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
    public function show(string $id)
    {
        $prestasi = Prestasi::find($id);
        return view('prestasi.show', compact('prestasi'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $data = Prestasi::find($id);
        return view('prestasi.edit', compact('data'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $prestasi = Prestasi::find($id);
        $input = $request->all();
        $input['foto_siswa'] = $prestasi->foto_siswa;
        if ($request->hasFile('foto_siswa')) {
            Storage::disk('public')->delete($prestasi->foto_siswa);

            $fotoBaru = Storage::disk('public')->put('images/foto_siswa', $request->file('foto_siswa'));
            $input['foto_siswa'] = $fotoBaru;
        }
        // dd($input);
        $prestasi->update($input);
        return redirect()->route('dashboard.prestasi');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $data = Prestasi::find($id);
        $name = $data->foto_siswa;
        if ($name != null || $name != '') {
            Storage::disk('public')->delete($name);
        }

        $data->delete();

        return redirect()->route('dashboard.prestasi');
    }
}
