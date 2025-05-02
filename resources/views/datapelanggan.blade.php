@extends('layouts.app')

@section('title', 'Cek Data')

@section('content')
<?php
    // dd(session('bus'));
    // dd($tanggalBerangkat);
?>


<div class="min-h-screen bg-gray-100 p-6">
    <div class="max-w-5xl mx-auto bg-white rounded-lg shadow-lg">
        <!-- Header Halaman -->
        <div class="w-full bg-green-600 text-white text-2xl font-bold p-4 flex justify-between items-center">
        <span>Informasi Pemesanan</span>
        <a href="/" class="text-3xl">
            <i class="fas fa-home"></i> <!-- Ikon FontAwesome -->
        </a>
        </div>

    <!-- Form Data Pelanggan -->
     <table class="w-full border-collapse border border-gray-300 mt-2">
            <thead>
                <tr class="bg-gray-200">
            <div class="flex justify-between">
                <label class="font-bold">Lokasi Awal:</label>
                <input value="{{session('bus')->lokasi_awal}}" type="text" class="border w-2/3 p-2 rounded bg-gray-200" readonly>
            </div>
            <div class="flex justify-between">
                <label class="font-bold">Lokasi Tujuan:</label>
                <input value="{{session('bus')->lokasi_tujuan}}" type="text" class="border w-2/3 p-2 rounded bg-gray-200" readonly>
            </div>
            <div class="flex justify-between">
                <label class="font-bold">Tanggal Berangkat:</label>
                <input value= "{{ $tanggalBerangkat }}" type="text" class="border w-2/3 p-2 rounded bg-gray-200" readonly>
            </div>

            <div class="flex justify-between">
                <label class="font-bold">Tipe Bus:</label>
                <input value="{{session('bus')->tipe_bus}}" type="text" class="border w-2/3 p-2 rounded bg-gray-200" readonly>
            </div>
            <div class="flex justify-between">
                <label class="font-bold">Jam Keberangkatan:</label>
                <input value="{{session('bus')->WAKTU}}" type="text" class="border w-2/3 p-2 rounded bg-gray-200" readonly>
            </div>
            <div class="flex justify-between">
                <label class="font-bold">Jumlah Tiket:</label>
                <input type="text" class="border w-2/3 p-2 rounded bg-gray-200" readonly>
            </div>
            <div class="flex justify-between">
                <label class="font-bold">Nomor Tempat Duduk:</label>
                <input value='{{$nomorKursi}}' type="text" class="border w-2/3 p-2 rounded bg-gray-200" readonly>
            </div>
        </div>

        <!-- Tombol Lanjut -->
        <div class="mt-6 text-center">
            <a href="{{ route('metodepembayaran') }}" class="bg-red-600 text-white text-lg font-bold py-3 px-10 rounded-lg hover:bg-red-800">
                Lanjut Ke Pembayaran
            </a>
        </div>
    </div>
</div>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        const nomorInput = document.querySelector('input[value="{{ $nomorKursi }}"]');
        const jumlahInput = document.querySelector('input[readonly]:not([value])'); // cari input readonly yang belum ada value (Jumlah Tiket)

        if (nomorInput && jumlahInput) {
            const nomorValue = nomorInput.value.trim();
            const kursiArray = nomorValue ? nomorValue.split(',').map(k => k.trim()).filter(k => k !== '') : [];
            const jumlahKursi = kursiArray.length;

            jumlahInput.value = jumlahKursi;
        }
    });
</script>

@endsection
