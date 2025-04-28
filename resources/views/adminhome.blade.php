@extends('layouts.app')

@section('title', 'adminhome')

{{-- Tambahkan link ke file CSS --}}
@section('head')
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
@endsection

@section('content')
<div class="min-h-screen bg-gray-100 flex flex-col items-center">
    <!-- Header -->
    <div class="w-full bg-green-600 text-white text-2xl font-bold p-4 flex justify-between items-center">
        <span>pilihkursi</span>

        </a>
    </div>
    <!-- Konten Utama -->
    <div class="max-w-md mx-auto mt-8 space-y-4">
    <div class="bg-white shadow-md rounded-lg p-4 flex justify-between items-center">
    <span class="text-lg font-semibold">Data Bus</span>
    <a href="{{ route('databusadmin') }}" class="bg-red-600 text-white px-4 py-2 rounded-lg hover:bg-red-700">
        Selanjutnya
    </a>
</div>


        <div class="bg-white shadow-md rounded-lg p-4 flex justify-between items-center">
            <span class="text-lg font-semibold">Pesanan Dan Pembayaran</span>
            <a href="{{ route('pesanandanpembayaranadmin') }}" class="bg-red-600 text-white px-4 py-2 rounded-lg hover:bg-red-700">
        Selanjutnya
    </a>
        </div>

        <div class="bg-white shadow-md rounded-lg p-4 flex justify-between items-center">
            <span class="text-lg font-semibold">Rute Dan Harga Tiket</span>
            <a href="{{ route('rutedanhargatiketadmin') }}" class="bg-red-600 text-white px-4 py-2 rounded-lg hover:bg-red-700">
        Selanjutnya
    </a>
        </div>

        <div class="bg-white shadow-md rounded-lg p-4 flex justify-between items-center">
            <span class="text-lg font-semibold">Pembatalan Tiket</span>
            <a href="{{ route('pembatalantiketadmin') }}" class="bg-red-600 text-white px-4 py-2 rounded-lg hover:bg-red-700">
        Selanjutnya
    </a>
        </div>
    </div>

</body>
</html>
