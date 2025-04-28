@extends('layouts.app')

@section('title', 'Metode Pembayaran')

@section('content')
<div class="min-h-screen bg-gray-100 p-6 flex items-center justify-center">
    <div class="w-full max-w-lg bg-white rounded-lg shadow-lg">
        <div class="bg-green-600 text-white text-lg font-bold p-4 rounded-t-lg">
            Metode Pembayaran
        </div>

        <!-- Bagian Rekomendasi Pembayaran -->
        <h3 class="text-lg font-bold mt-1 mb-2 text-center">Rekomendasi Pembayaran</h3>
        <div class="space-y-2">
            <div onclick="selectPayment(this)" class="flex justify-center items-center h-10 bg-gray-200 p-3 rounded-lg cursor-pointer hover:bg-gray-300">
                <img src="{{ asset('images/Gopay.png') }}" alt="Gopay" class="h-8">
            </div>
            <div onclick="selectPayment(this)" class="flex justify-center items-center h-10 bg-gray-200 p-3 rounded-lg cursor-pointer hover:bg-gray-300">
                <img src="{{ asset('images/Dana.png') }}" alt="Dana" class="h-8">
            </div>
            <div onclick="selectPayment(this)" class="flex justify-center items-center h-10 bg-gray-200 p-3 rounded-lg cursor-pointer hover:bg-gray-300">
                <img src="{{ asset('images/OVO.png') }}" alt="OVO" class="h-8">
            </div>
        </div>

        <!-- Bagian Transfer ATM -->
        <h3 class="text-lg font-bold mt-1 mb-2 text-center">Transfer ATM</h3>
        <div class="space-y-2">
            <div onclick="selectPayment(this)" class="flex justify-center items-center h-10 bg-gray-200 p-3 rounded-lg cursor-pointer hover:bg-gray-300">
                <img src="{{ asset('images/Mandiri.png') }}" alt="Mandiri" class="h-8">
            </div>
            <div onclick="selectPayment(this)" class="flex justify-center items-center h-10 bg-gray-200 p-3 rounded-lg cursor-pointer hover:bg-gray-300">
                <img src="{{ asset('images/BRI.png') }}" alt="BRI" class="h-8">
            </div>
            <div onclick="selectPayment(this)" class="flex justify-center items-center h-10 bg-gray-200 p-3 rounded-lg cursor-pointer hover:bg-gray-300">
                <img src="{{ asset('images/BNI.png') }}" alt="BNI" class="h-8">
            </div>
        </div>

        <!-- Bagian Retail -->
        <h3 class="text-lg font-bold mt-1 mb-2 text-center">Retail</h3>
        <div class="space-y-2">
            <div onclick="selectPayment(this)" class="flex justify-center items-center h-10 bg-gray-200 p-3 rounded-lg cursor-pointer hover:bg-gray-300">
                <img src="{{ asset('images/Indomaret.png') }}" alt="Indomaret" class="h-8">
            </div>
            <div onclick="selectPayment(this)" class="flex justify-center items-center h-10 bg-gray-200 p-3 rounded-lg cursor-pointer hover:bg-gray-300">
                <img src="{{ asset('images/Alfamart.png') }}" alt="Alfamart" class="h-8">
            </div>

            <!-- Tombol Submit -->
            <div class="text-center mt-4">
                <button type="submit" class="w-full bg-green-600 text-white font-bold py-2 px-4 rounded-lg hover:bg-green-700 transition">
                    Selesai
                </button>
            </div>
        </div>
    </div>
</div>

<!-- JavaScript -->
<script>
    function selectPayment(element) {
        // Hapus warna merah dari elemen lain yang sebelumnya aktif
        document.querySelectorAll('.bg-red-400').forEach(el => {
            el.classList.remove('bg-red-400');
        });

        // Tambahkan warna merah ke elemen yang diklik
        element.classList.add('bg-red-400');
    }
</script>

@endsection
