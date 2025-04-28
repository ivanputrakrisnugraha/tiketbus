@extends('layouts.app')

@section('title', 'Edit Data Bus')

@section('content')
<div class="min-h-screen bg-gray-100 p-6">
    <div class="max-w-lg mx-auto bg-white rounded-lg shadow-lg p-6">
        <h2 class="text-2xl font-bold mb-4">Edit Data Bus</h2>

        @if ($errors->any())
            <div class="bg-red-500 text-white p-4 rounded-lg mb-4">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form action="{{ route('bus.update', $bus->id_bus) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="mb-4">
                <label class="block text-gray-700">Nama Bus:</label>
                <input type="text" name="nm_bus" value="{{ $bus->nm_bus }}" class="w-full border border-gray-300 rounded-lg p-2" required>
            </div>

            <div class="mb-4">
                <label class="block text-gray-700">Tipe Bus:</label>
                <input type="text" name="tipe_bus" value="{{ $bus->tipe_bus }}" class="w-full border border-gray-300 rounded-lg p-2" required>
            </div>

            <div class="mb-4">
                <label class="block text-gray-700">Harga Tiket:</label>
                <input type="text" name="harga_tiket" value="{{ $bus->harga_tiket }}" class="w-full border border-gray-300 rounded-lg p-2" required>
            </div>

            <div class="mb-4">
                <label class="block text-gray-700">Kapasitas:</label>
                <input type="number" name="kapasitas" value="{{ $bus->kapasitas }}" class="w-full border border-gray-300 rounded-lg p-2" required>
            </div>

            <div class="mb-4">
    <label class="block text-gray-700">Waktu:</label>
    <input type="time" name="WAKTU" value="{{ $bus->WAKTU ? \Carbon\Carbon::createFromFormat('H:i:s', $bus->WAKTU)->format('H:i') : '' }}" class="w-full border border-gray-300 rounded-lg p-2">
</div>

            <div class="mb-4">
                <label class="block text-gray-700">Lokasi Awal:</label>
                <input type="text" name="lokasi_awal" value="{{ $bus->lokasi_awal }}" class="w-full border border-gray-300 rounded-lg p-2" required>
            </div>

            <div class="mb-4">
                <label class="block text-gray-700">Lokasi Tujuan:</label>
                <input type="text" name="lokasi_tujuan" value="{{ $bus->lokasi_tujuan }}" class="w-full border border-gray-300 rounded-lg p-2" required>
            </div>

            <button type="submit" class="bg-blue-500 text-white py-2 px-4 rounded-lg hover:bg-blue-600">
                Update
            </button>
        </form>
    </div>
</div>
@endsection
