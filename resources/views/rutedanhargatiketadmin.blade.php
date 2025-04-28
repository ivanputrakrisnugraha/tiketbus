@extends('layouts.app')

@section('title', 'Rute dan Harga Tiket')

@section('content')
<div class="min-h-screen bg-gray-100 p-6">
    <div class="max-w-6xl mx-auto bg-white rounded-lg shadow-lg">
        <!-- Header Halaman -->
        <div class="bg-green-600 text-white text-xl font-bold p-4 rounded-t-lg flex justify-between items-center">
            <span>Rute Dan Harga Tiket</span>
            <a href="{{ route('adminhome') }}" class="text-3xl">
    <i class="fas fa-home"></i> <!-- Ikon FontAwesome -->
</a>
        </div>
        <!-- Tabel Rute dan Harga -->
        <div class="p-4">
            <table class="w-full text-left border-collapse border border-gray-300">
                <thead class="bg-gray-100">
                    <tr>
                        <th class="border border-gray-300 p-3 text-sm font-medium text-gray-700">ID Rute</th>
                        <th class="border border-gray-300 p-3 text-sm font-medium text-gray-700">Rute Awal</th>
                        <th class="border border-gray-300 p-3 text-sm font-medium text-gray-700">Rute Tujuan</th>
                        <th class="border border-gray-300 p-3 text-sm font-medium text-gray-700">Harga Tiket</th>
                        <th class="border border-gray-300 p-3 text-sm font-medium text-gray-700">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <tr class="hover:bg-gray-100">
                        <td class="border border-gray-300 p-3"></td>
                        <td class="border border-gray-300 p-3"></td>
                        <td class="border border-gray-300 p-3"></td>
                        <td class="border border-gray-300 p-3"></td>
                        <td class="border border-gray-300 p-3 flex space-x-2">
                            <button class="bg-red-600 text-white px-3 py-1 rounded hover:bg-red-700 text-sm">Tambah</button>
                            <button class="bg-red-600 text-white px-3 py-1 rounded hover:bg-red-700 text-sm">Ubah</button>
                            <button class="bg-red-600 text-white px-3 py-1 rounded hover:bg-red-700 text-sm">Hapus</button>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>

        <!-- Tombol Tambah -->
        <div class="text-center mt-4">
            <button type="button" class="bg-red-600 text-white font-bold py-2 px-6 rounded-lg hover:bg-red-700 transition">
                Tambah
            </button>
        </div>
    </div>
</div>
@endsection
