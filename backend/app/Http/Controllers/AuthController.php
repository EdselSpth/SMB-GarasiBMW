<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function login()
    {
        return view('backend.auth.login');
    }
    public function authenticate(Request $request)
    {
        $credentials = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
        ]);

        if (Auth::attempt($credentials)) {
            // Cek apakah akun masih aktif (status = true)
            if (Auth::user()->status == false) {
                Auth::logout();
                return back()->withErrors(['email' => 'Akun lu udah non-aktif brok!']);
            }

            $request->session()->regenerate();

            // Redirect ke halaman dashboard kalau sukses
            return redirect()->intended('dashboard')->with('success', 'Halo, selamat datang!');
        }

        // Kalau gagal login
        return back()->withErrors([
            'email' => 'Email atau password salah brok.',
        ])->onlyInput('email');
    }

    public function logout(Request $request)
    {
        Auth::logout();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect('/login');
    }
}
