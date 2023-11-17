<?php

namespace App\Http\Controllers;
use App\Models\Staff;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class staffController  extends Controller
{
    public function index()
    {
        $data = Staff::all();
        return view('staff.index', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('staff.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = Staff::create($request->all());
        if ($request->hasFile('foto')) {
            
            $foto = $request->file('foto')->store('foto', 'public');
            $data->foto = $foto;
            $data->save();
        }
        return redirect()->route('dashboard.staff');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $staff = staff::find($id);
        return view('staff.show', compact('staff'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $data = Staff::find($id);
        return view('staff.edit', compact('data'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $Staff = Staff::find($id);
        $input = $request->all();
        $input['foto'] = $Staff->foto;
        if ($request->hasFile('foto')) {
            Storage::disk('public')->delete($Staff->foto);
            
            $fotoBaru = Storage::disk('public')->put('images/foto', $request->file('foto'));
            $input['foto'] = $fotoBaru;
        }
        $Staff->update($input);
        return redirect()->route('dashboard.staff');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $data = Staff::find($id);
        $name = $data->foto;
        if($name != null || $name != '') {
            Storage::disk('public')->delete($name);
        }

        $data->delete();
        
        return redirect()->route('dashboard.staff');
    }
}


