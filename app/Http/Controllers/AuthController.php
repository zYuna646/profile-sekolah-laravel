<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Validator;

class AuthController extends Controller
{
    public function index()
    {
        $user = Auth::user();
        if ($user) {
            if ($user->role == 'admin') {
                return redirect()->intended('dashboard');
            } else {
                return redirect()->intended('dashboard-guru');
            }
        }
        return view('auth.login');
    }

    public function login_proses(Request $request)
    {
        $request->validate([
            'email' => 'required',
            'password' => 'required'
        ]);

        $credent = $request->only('email', 'password');
        if (Auth::attempt($credent)) {
            $user = Auth::user();
            if ($user->role == 'admin') {
                return redirect()->route('dashboard');
            }
        }
        return redirect()->route('login')->withInput()->with(['error' => 'Data yang dimasukkan salah']);
    }

    public function regist()
    {
        return view('auth.regist');
    }

    public function regist_proses(Request $request)
    {
        $validator = $request->validate([
            'name' => 'required',
            'email' => 'required|unique:users',
            'name' => 'required',
            'password' => 'required',
        ]);

        if (!$validator) {
            return redirect()->route('regist')->withErrors($validator)->withInput();
        }

        $request['role'] = 'admin';
        $request['password'] = bcrypt($request->password);

        User::create($request->all());

        return redirect()->route('login');
    }

    public function logout(Request $request)
    {
        $request->session()->flush();

        Auth::logout();

        return redirect()->route('login');
    }
}
