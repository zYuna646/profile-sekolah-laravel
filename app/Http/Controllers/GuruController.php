<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class GuruController extends Controller
{
    public function index()
    {
        $data = User::all();
        return view('guru.index', compact('data'));
    }
    public function create()
    {
        return view('guru.create');
    }
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|unique:users',
            'role' => 'required',
            'password' => 'required',
        ]);

        User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => bcrypt($request->password),
            'role' => $request->role
        ]);

        return redirect()->route('dashboard.guru');
    }

    public function edit(string $id)
    {
        $data = User::find($id);
        return view('guru.edit', compact('data'));
    }

    public function update(Request $request, string $id)
    {
        $name = $request->name;
        $email = $request->email;
        $password = $request->password;
        $role = $request->role;

        $guru = User::find($id);
        $guru->name = $name;
        $guru->email = $email;
        if ($password != null || $password != '') {
            $guru->password = $password;
        }
        $guru->role = $role;
        $guru->save();

        return redirect()->route('dashboard.guru');
    }


    public function destroy($id)
    {
        $data = User::find($id);
        $data->delete();

        return redirect()->route('dashboard.guru');
    }
}
