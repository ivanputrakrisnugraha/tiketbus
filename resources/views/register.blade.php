@extends('layouts.app')

@section('content')
<div class="min-h-screen flex justify-center items-center bg-gray-100">
    <div class="bg-white shadow-md rounded-lg p-6 w-full max-w-sm">
        <!-- Judul Halaman -->
        <h2 class="text-2xl font-bold text-green-700 text-center mb-6">Daftar Akun</h2>

        <!-- Form Pendaftaran -->
        <form action="{{ route('register.store') }}" method="POST">
            @csrf
            <div class="space-y-4">
                <!-- Nama -->
                <div>
                    <label class="block text-gray-700 font-semibold">Nama</label>
                    <input type="text" name="nama" class="w-full border border-gray-300 rounded-lg px-3 py-2 focus:outline-none focus:ring focus:ring-green-300" placeholder="Masukkan nama">
                </div>

                <!-- No HP -->
                <div>
                    <label class="block text-gray-700 font-semibold">No HP</label>
                    <input type="text" name="no_hp" class="w-full border border-gray-300 rounded-lg px-3 py-2 focus:outline-none focus:ring focus:ring-green-300" placeholder="Masukkan nomor HP">
                </div>

                <!-- Email -->
                <div>
                    <label class="block text-gray-700 font-semibold">Email</label>
                    <input type="email" name="email" class="w-full border border-gray-300 rounded-lg px-3 py-2 focus:outline-none focus:ring focus:ring-green-300" placeholder="Masukkan email">
                </div>

                <!-- Password -->
                <div>
                    <label class="block text-gray-700 font-semibold">Password</label>
                    <input type="password" name="password" class="w-full border border-gray-300 rounded-lg px-3 py-2 focus:outline-none focus:ring focus:ring-green-300" placeholder="Masukkan password">
                </div>

                <!-- Konfirmasi Password -->
                <div>
                    <label class="block text-gray-700 font-semibold">Konfirmasi Password</label>
                    <input type="password" name="password_confirmation" class="w-full border border-gray-300 rounded-lg px-3 py-2 focus:outline-none focus:ring focus:ring-green-300" placeholder="Ulangi password">
                </div>

                <!-- Tombol Daftar -->
                <div class="text-center">
                    <button type="submit" class="w-full bg-red-600 text-white font-bold py-2 px-4 rounded-lg hover:bg-red-700 transition">
                        DAFTAR
                    </button>
                </div>

                <!-- Link ke halaman login -->
                <p class="text-center text-gray-600 mt-4">Sudah punya akun?
                    <a href="{{ route('loginpelanggan') }}" class="text-blue-600 font-semibold hover:underline">Login</a>
                </p>
            </div>
        </form>
    </div>
</div>
@endsection
