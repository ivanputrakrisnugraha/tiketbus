<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth; // ✅ Tambahkan ini untuk menghindari error
use Illuminate\Support\Facades\Hash;

class LoginPelangganController extends Controller
{
    // Menampilkan form login pelanggan
    public function showLoginForm()
    {
        return view('loginpelanggan'); // Mengarahkan ke view form login
    }

    // Proses login pelanggan
    public function login(Request $request)
    {
        // Log::info('Fungsi login() dipanggil');
        dd('Masuk ke fungsi login!');
        // Validasi input dari form login
        $request->validate([
            'username' => 'required|string',
            'password' => 'required|string',
        ]);

        $credentials = $request->only('username', 'password');
        // Cek autentikasi dengan metode Auth::attempt
        if (Auth::attempt($credentials)) {
            // Redirect ke halaman daftarbus setelah login berhasil
            return redirect()->route('daftarbus')->with('success', 'Login berhasil! Selamat datang.');
        }

        // Jika login gagal, kembali ke halaman login dengan pesan error
        return back()->withErrors([
            'loginError' => 'Username atau password salah. Silakan coba lagi.',
        ]);
    }

    // Fungsi logout pelanggan
    public function logout(Request $request)
    {
        Auth::logout(); // Logout user
        $request->session()->invalidate(); // Hapus sesi
        $request->session()->regenerateToken(); // Regenerasi CSRF token
        return redirect('/')->with('message', 'Anda berhasil logout!');
}
}
