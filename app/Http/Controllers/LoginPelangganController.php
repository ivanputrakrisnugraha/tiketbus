<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginPelangganController extends Controller
{
    // ✅ Pastikan nama metode ini sesuai dengan rute yang dipanggil
    public function showLoginForm()
    {
        return view('loginpelanggan'); // Mengarahkan ke view form login pelanggan
    }

    public function login(Request $request)
    {

        $request->validate([
            'username' => 'required|string',
            'password' => 'required|string',
        ]);


        $credentials = $request->only('username', 'password');

        $role = \App\Models\User::where('username', $request->input('username'))->first()->only('role');
        // dd($role['role']);

        if (Auth::attempt($credentials)) {
            if($role['role'] == "guest"){
                return redirect()->route('daftarbus')->with('success', 'Login berhasil!');
            }else if($role['role'] == "admin"){
                // dd($role['role']);
                return redirect()->route('adminhome')->with('success', 'Login berhasil!');
            }
        }

        return back()->withErrors(['loginError' => 'Username atau password salah.']);
    }
}
