<?php

namespace App\Http\Controllers;

use App\Models\DetailKompetensi;
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
        $nama = $request->nama;
        $deskripsi = $request->deskripsi;
        // $data = Kompetensi::create($request->all());
        $data = new Kompetensi;
        $data->nama = $nama;
        $data->deskripsi = $deskripsi;
        $data->save();

        $id_kompetensi = $data->id;

        if ($request->hasFile('foto_kompetensi')) {
            foreach ($request->file('foto_kompetensi') as $foto) {
                $fotoName = time() . '_' . $foto->getClientOriginalName();
                $path = $foto->storeAs('images/foto_kompetensi', $fotoName);
                // $foto = Storage::disk('public')->put('images/foto_kompetensi', $request->file('foto_kompetensi'));
                DetailKompetensi::create([
                    'id_foto' => $id_kompetensi,
                    'nama_foto_kompetensi' => $path
                ]);
            }

            // $foto = $request->file('foto_kompetensi')->store('foto_kompetensi', 'public');
            // $data->foto_kompetensi = $foto;
            // $data->save();
        }
        return redirect()->route('dashboard.kompetensi');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $kompetensi = Kompetensi::find($id);
        return view('kompetensi.show', compact('kompetensi'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $data = Kompetensi::find($id);
        $detail = DetailKompetensi::where('id_foto', $id)->get();
        return view('kompetensi.edit', compact('data'))->with(['detail' => $detail]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $nama = $request->nama;
        $deskripsi = $request->deskripsi;

        $kompetensi = Kompetensi::find($id);
        $kompetensi->nama = $nama;
        $kompetensi->deskripsi = $deskripsi;
        $kompetensi->save();

        if ($request->hasFile('foto_kompetensi')) {
            foreach ($request->file('foto_kompetensi') as $foto) {
                $fotoName = time() . '_' . $foto->getClientOriginalName();
                $path = $foto->storeAs('images/foto_kompetensi', $fotoName);

                // Check if a DetailKompetensi record with this name exists
                $detailKompetensi = DetailKompetensi::where([
                    'id_foto' => $id,
                    'nama_foto_kompetensi' => $path,
                ])->first();

                if (!$detailKompetensi) {
                    DetailKompetensi::create([
                        'id_foto' => $id,
                        'nama_foto_kompetensi' => $path
                    ]);
                }
            }
        }

        // $input = $request->all();
        // $input['foto_kompetensi'] = $kompetensi->foto_kompetensi;
        // if ($request->hasFile('foto_kompetensi')) {
        //     Storage::disk('public')->delete($kompetensi->foto_kompetensi);

        //     $fotoBaru = Storage::disk('public')->put('images/foto_kompetensi', $request->file('foto_kompetensi'));
        //     $input['foto_kompetensi'] = $fotoBaru;
        // }
        // $kompetensi->update($input);
        return redirect()->route('dashboard.kompetensi');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $data = Kompetensi::find($id);
        $name = $data->foto_kompetensi;
        if ($name != null || $name != '') {
            Storage::disk('public')->delete($name);
        }

        $data->delete();

        return redirect()->route('dashboard.kompetensi');
    }

    public function destroyDetail($id)
    {
        $data = DetailKompetensi::find($id);
        $name = $data->nama_foto_kompetensi;
        if ($name != null || $name != '') {
            Storage::disk('public')->delete($name);
        }

        $data->delete();

        return redirect()->route('dashboard.kompetensi.edit');
    }
}
