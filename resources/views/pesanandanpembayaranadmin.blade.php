@extends('layouts.app')

@section('title', 'Pesanan dan Pembayaran')

@section('content')
<div class="min-h-screen bg-gray-100 p-6">
    <div class="max-w-6xl mx-auto bg-white rounded-lg shadow-lg">
        <!-- Header Halaman -->
        <div class="bg-green-600 text-white text-xl font-bold p-4 rounded-t-lg flex justify-between items-center">
            <span>Pesanan dan Pembayaran</span>
            <a href="{{ route('adminhome') }}" class="text-3xl">
    <i class="fas fa-home"></i> <!-- Ikon FontAwesome -->
</a>

        </div>

        <!-- Tabel Pesanan dan Pembayaran -->
        <table class="w-full border-collapse border border-gray-300 mt-2">
            <thead>
                <tr class="bg-gray-200 text-sm">
                    <th class="border border-gray-300 p-2">Lokasi Awal</th>
                    <th class="border border-gray-300 p-2">Lokasi Tujuan</th>
                    <th class="border border-gray-300 p-2">Tgl Berangkat</th>
                    <th class="border border-gray-300 p-2">Tipe Bus</th>
                    <th class="border border-gray-300 p-2">Waktu Berangkat</th>
                    <th class="border border-gray-300 p-2">Jumlah</th>
                    <th class="border border-gray-300 p-2">Metode Bayar</th>
                    <th class="border border-gray-300 p-2">Status Bayar</th>
                    <th class="border border-gray-300 p-2">Nominal</th>
                    <th class="border border-gray-300 p-2">Bukti Bayar</th>
                    <th class="border border-gray-300 p-2">Aksi</th>
                </tr>
            </thead>
            <tbody>
                <!-- Baris Pesanan Kosong -->
                <tr>
                    <td class="border border-gray-300 p-2"></td>
                    <td class="border border-gray-300 p-2"></td>
                    <td class="border border-gray-300 p-2"></td>
                    <td class="border border-gray-300 p-2"></td>
                    <td class="border border-gray-300 p-2"></td>
                    <td class="border border-gray-300 p-2"></td>
                    <td class="border border-gray-300 p-2"></td>
                    <td class="border border-gray-300 p-2"></td>
                    <td class="border border-gray-300 p-2"></td>
                    <td class="border border-gray-300 p-2"></td>
                    <td class="border border-gray-300 p-2 text-center">
                        <button class="bg-red-500 text-white py-1 px-4 rounded-lg hover:bg-red-600">Selesai</button>
                    </td>
                </tr>
                <tr>
                    <td class="border border-gray-300 p-2"></td>
                    <td class="border border-gray-300 p-2"></td>
                    <td class="border border-gray-300 p-2"></td>
                    <td class="border border-gray-300 p-2"></td>
                    <td class="border border-gray-300 p-2"></td>
                    <td class="border border-gray-300 p-2"></td>
                    <td class="border border-gray-300 p-2"></td>
                    <td class="border border-gray-300 p-2"></td>
                    <td class="border border-gray-300 p-2"></td>
                    <td class="border border-gray-300 p-2"></td>
                    <td class="border border-gray-300 p-2 text-center">
                        <button class="bg-red-500 text-white py-1 px-4 rounded-lg hover:bg-red-600">Selesai</button>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
</div>
@endsection
