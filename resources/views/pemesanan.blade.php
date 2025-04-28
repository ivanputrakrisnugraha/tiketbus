@extends('layouts.app')

@section('content')
<div class="min-h-screen bg-gray-100 flex justify-center items-center">
    <div class="bg-white shadow-md rounded-lg p-6 w-full max-w-md">
        <!-- Header -->
        <h2 class="text-2xl font-bold text-green-700 mb-4">Pemesanan</h2>

        <!-- Form Pemesanan -->
        <form action="{{ route('pilihkursi') }}" method="POST">
            @csrf
            <div class="space-y-4">
                <!-- Nama Bus -->
                <div>
                    <label class="block text-gray-700 font-semibold">Nama Bus</label>
                    <input type="text" name="nm_bus" class="w-full border border-gray-300 rounded-lg px-3 py-2 focus:outline-none focus:ring focus:ring-green-300"
                        value="{{ $bus->nm_bus ?? '' }}" readonly>
                </div>
            <!-- tiket bus -->
                    <div>
                    <label class="block text-gray-700 font-semibold">Harga Tiket</label>
                    <input type="text" name="harga_tiket" class="w-full border border-gray-300 rounded-lg px-3 py-2 focus:outline-none focus:ring focus:ring-green-300"
                        value="{{ $bus->harga_tiket ?? '' }}" readonly>
                </div>
                <!-- Lokasi Awal -->
                <div>
                    <label class="block text-gray-700 font-semibold">Lokasi Awal</label>
                    <input type="text" name="lokasi_awal" class="w-full border border-gray-300 rounded-lg px-3 py-2 focus:outline-none focus:ring focus:ring-green-300"
                        value="{{ $bus->lokasi_awal ?? '' }}" readonly>
                </div>

                <!-- Lokasi Tujuan -->
                <div>
                    <label class="block text-gray-700 font-semibold">Lokasi Tujuan</label>
                    <input type="text" name="lokasi_tujuan" class="w-full border border-gray-300 rounded-lg px-3 py-2 focus:outline-none focus:ring focus:ring-green-300"
                        value="{{ $bus->lokasi_tujuan ?? '' }}" readonly>
                </div>

                <!-- Tanggal Berangkat -->
                <div>
                    <label class="block text-gray-700 font-semibold">Tanggal Berangkat</label>
                    <input type="date" name="tanggal_berangkat" class="w-full border border-gray-300 rounded-lg px-3 py-2 focus:outline-none focus:ring focus:ring-green-300">
                </div>

                <!-- Tipe Bus -->
                <div>
                    <label class="block text-gray-700 font-semibold">Tipe Bus</label>
                    <input type="text" name="tipe_bus" class="w-full border border-gray-300 rounded-lg px-3 py-2 focus:outline-none focus:ring focus:ring-green-300"
                        value="{{ $bus->tipe_bus ?? '' }}" readonly>
                </div>

                <div>
    <label class="block text-gray-700 font-semibold">Jam Keberangkatan</label>
    <input type="time" name="jam_keberangkatan" class="w-full border border-gray-300 rounded-lg px-3 py-2 focus:outline-none focus:ring focus:ring-green-300"
        value="{{ isset($bus->WAKTU) ? \Carbon\Carbon::parse($bus->WAKTU)->format('H:i') : '' }}" readonly>
</div>
                <!-- Jumlah Tiket -->
                <div>
                    <label class="block text-gray-700 font-semibold">Jumlah Tiket</label>
                    <input type="number" name="jumlah" min="1" class="w-full border border-gray-300 rounded-lg px-3 py-2 focus:outline-none focus:ring focus:ring-green-300" placeholder="Masukkan jumlah tiket">
                </div>

                <!-- Tombol Submit -->
                <div class="text-center mt-4">
                    <button type="submit" class="w-full bg-green-600 text-white font-bold py-2 px-4 rounded-lg hover:bg-green-700 transition">
                        Selanjutnya
                    </button>
                </div>

                <!-- Tombol Kembali -->
                <div class="text-center mt-2">
                    <a href="{{ route('daftarbus') }}" class="w-full block bg-red-600 text-white font-bold py-2 px-4 rounded-lg text-center hover:bg-red-700 transition">
                        Kembali
                    </a>
                </div>
            </div>
        </form>
    </div>
</div>
@endsection
