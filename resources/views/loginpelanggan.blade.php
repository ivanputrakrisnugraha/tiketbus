@extends('layouts.app')

@section('content')
<div class="min-h-screen flex justify-center items-center bg-gray-100">
    <div class="bg-white shadow-md rounded-lg p-6 w-full max-w-sm">
        <!-- Logo atau Judul -->
        <h2 class="text-2xl font-bold text-green-700 text-center mb-6">CariBus.Yol</h2>

        <!-- Form Login -->
        <form action="{{ route('loginpelanggan.auth') }}" method="GET"> <!-- Ubah action ke route daftarbus -->
            @csrf
            <div class="space-y-4">
                <!-- Username -->
                <div>
                    <label class="block text-gray-700 font-semibold">Username</label>
                    <input type="text" name="username" class="w-full border border-gray-300 rounded-lg px-3 py-2 focus:outline-none focus:ring focus:ring-green-300" placeholder="Masukkan username">
                </div>

                <!-- Password -->
                <div>
                    <label class="block text-gray-700 font-semibold">Password</label>
                    <div class="relative">
                        <input type="password" id="password" name="password" class="w-full border border-gray-300 rounded-lg px-3 py-2 focus:outline-none focus:ring focus:ring-green-300" placeholder="Masukkan password">
                        <button type="button" onclick="togglePassword()" class="absolute right-3 top-3 text-gray-500">👁️</button>
                    </div>
                </div>

                <!-- Tombol Login -->
                <div class="text-center">
                    <button type="submit" class="w-full bg-red-600 text-white font-bold py-2 px-4 rounded-lg hover:bg-red-700 transition">
                        LOGIN
                    </button>
                </div>

                <!-- Link ke halaman pendaftaran -->
                <p class="text-center text-gray-600 mt-4">Belum punya akun?
                    <a href="{{ route('register.store') }}" class="text-blue-600 font-semibold hover:underline">Daftar</a>
                </p>
            </div>
        </form>
    </div>
</div>

<!-- Script untuk toggle password visibility -->
<script>
    function togglePassword() {
        let passwordField = document.getElementById("password");
        if (passwordField.type === "password") {
            passwordField.type = "text";
        } else {
            passwordField.type = "password";
        }
    }
</script>
@endsection
