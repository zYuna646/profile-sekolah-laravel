<?php

namespace App\Http\Controllers;

use App\Models\Erapor;
use Illuminate\Http\Request;

class EraporController extends Controller
{
    public function index()
    {
        $data = Erapor::all();
        return view('erapor.index', compact('data'));
    }
    public function create()
    {
        return view('erapor.create');
    }
    public function store(Request $request)
    {
        $link = $request->link;

        $data = new Erapor;
        $data->link = $link;
        $data->save();
        return redirect()->route('dashboard-guru.erapor');
    }

    public function edit(string $id)
    {
        $data = Erapor::find($id);
        return view('erapor.edit', compact('data'));
    }

    public function update(Request $request, string $id)
    {
        $link = $request->link;

        $erapor = Erapor::find($id);
        $erapor->link = $link;
        $erapor->save();

        return redirect()->route('dashboard-guru.erapor');
    }


    public function destroy($id)
    {
        $data = Erapor::find($id);
        $data->delete();

        return redirect()->route('dashboard-guru.erapor');
    }
}
