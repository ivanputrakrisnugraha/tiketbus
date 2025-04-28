@extends('layouts.app')

@section('content')
<div class="min-h-screen bg-gray-100 flex flex-col items-center">
    <!-- Header -->
    <div class="w-full bg-gradient-to-r from-green-500 via-green-600 to-green-700 text-white p-6 shadow-lg">
    <div class="flex items-center justify-between">
        <!-- Teks Header -->
        <div class="flex items-center space-x-4">
            <i class="fas fa-bus text-3xl"></i> <!-- Ikon Bus -->
            <span class="text-3xl font-extrabold">Daftar Bus</span>
        </div>

        <!-- Tombol Logout -->
        <form action="{{ route('logout') }}" method="POST">
    @csrf
    <button type="submit" class="flex items-center bg-red-600 text-white rounded-full px-4 py-2 hover:bg-red-700 transition">
        <i class="fas fa-sign-out-alt mr-2"></i> Logout
    </button>
</form>
    </div>
</div>
    <!-- Konten Bus dengan Grid -->
    <div class="grid grid-cols-1 md:grid-cols-3 gap-4 mt-6">
        @foreach($busList as $bus)
        <a href="{{ route('pemesanan', ['id_bus' => $bus->id_bus]) }}" class="block"> <!-- Redirect ke halaman pemesanan -->
            <div class="bg-white shadow-md rounded-lg p-4 hover:bg-gray-100 transition">
                <img src="{{ asset('images/bus.png') }}" alt="Bus Image" class="h-30 mx-auto"> <!-- Tambahkan Gambar -->
                <p class="text-center text-xl font-semibold mt-4">{{ $bus->nm_bus }}</p> <!-- Nama Bus -->
                <p class="text-left text-xs font-semibold mt-4">Tipe Bus: {{ $bus->tipe_bus }}</p>
                <p class="text-left text-xs font-semibold mt-4">Harga Tiket: {{ $bus->harga_tiket }}</p>
            </div>
        </a>
        @endforeach
    </div>
</div>
@endsection
