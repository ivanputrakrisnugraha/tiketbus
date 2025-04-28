@extends('layouts.app')

@section('title', 'Tambah Bus')

@section('content')
<div class="min-h-screen bg-gray-100 p-6">
    <div class="max-w-lg mx-auto bg-white rounded-lg shadow-lg p-6">
        <h2 class="text-2xl font-bold mb-4">Tambah Data Bus</h2>

        @if ($errors->any())
            <div class="bg-red-500 text-white p-4 rounded-lg mb-4">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form action="{{ route('bus.store') }}" method="POST">
            @csrf
            <div class="mb-4">
                <label class="block text-gray-700">Nama Bus:</label>
                <input type="text" name="nm_bus" class="w-full border border-gray-300 rounded-lg p-2" required>
            </div>

            <div class="mb-4">
                <label class="block text-gray-700">Tipe Bus:</label>
                <input type="text" name="tipe_bus" class="w-full border border-gray-300 rounded-lg p-2" required>
            </div>

            <div class="mb-4">
                <label class="block text-gray-700">Harga Tiket:</label>
                <input type="text" name="harga_tiket" class="w-full border border-gray-300 rounded-lg p-2" required>
            </div>

            <div class="mb-4">
                <label class="block text-gray-700">Kapasitas:</label>
                <input type="number" name="kapasitas" class="w-full border border-gray-300 rounded-lg p-2" required>
            </div>

            <div class="mb-4">
                <label class="block text-gray-700">Waktu:</label>
                <input type="text" name="waktu" class="w-full border border-gray-300 rounded-lg p-2" required>
            </div>

            <div class="mb-4">
                <label class="block text-gray-700">Lokasi Awal:</label>
                <input type="text" name="lokasi_awal" class="w-full border border-gray-300 rounded-lg p-2" required>
            </div>

            <div class="mb-4">
                <label class="block text-gray-700">Lokasi Tujuan:</label>
                <input type="text" name="lokasi_tujuan" class="w-full border border-gray-300 rounded-lg p-2" required>
            </div>

            <button type="submit" class="bg-blue-500 text-white py-2 px-4 rounded-lg hover:bg-blue-600">
                Simpan
            </button>
        </form>
    </div>
</div>
@endsection
