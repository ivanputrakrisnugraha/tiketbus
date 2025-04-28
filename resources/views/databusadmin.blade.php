@extends('layouts.app')

@section('title', 'Data Bus Admin')

@section('content')
<div class="min-h-screen bg-gray-100 p-6">
    <div class="max-w-5xl mx-auto bg-white rounded-lg shadow-lg">
        <div class="w-full bg-green-600 text-white text-2xl font-bold p-4 flex justify-between items-center">
            <span>Data Bus Admin</span>
            <a href="{{ route('adminhome') }}" class="text-3xl">
                <i class="fas fa-home"></i> <!-- Ikon Home -->
            </a>
        </div>

        <!-- Tabel Data Bus -->
        <table class="w-full border-collapse border border-gray-300 mt-2">
            <thead>
                <tr class="bg-gray-200">
                    <th class="border border-gray-300 p-2">Id Bus</th>
                    <th class="border border-gray-300 p-2">Nama Bus</th>
                    <th class="border border-gray-300 p-2">Harga</th>
                    <th class="border border-gray-300 p-2">Tipe Bus</th>
                    <th class="border border-gray-300 p-2">Kapasitas</th>
                    <th class="border border-gray-300 p-2">Waktu</th>
                    <th class="border border-gray-300 p-2">Rute Awal</th>
                    <th class="border border-gray-300 p-2">Rute Tujuan</th>
                    <th class="border border-gray-300 p-2">Aksi</th>
                </tr>
            </thead>
            <tbody>
            @foreach($busList as $bus)
<tr>
    <td class="border border-gray-300 p-2">{{ $bus->id_bus }}</td>
    <td class="border border-gray-300 p-2">{{ $bus->nm_bus }}</td>
    <td class="border border-gray-300 p-2">{{ $bus->harga_tiket }}</td>
    <td class="border border-gray-300 p-2">{{ $bus->tipe_bus }}</td>
    <td class="border border-gray-300 p-2">{{ $bus->kapasitas }}</td>
    <td class="border border-gray-300 p-2">{{ $bus->WAKTU }}</td>
    <td class="border border-gray-300 p-2">{{ $bus->lokasi_awal }}</td>
    <td class="border border-gray-300 p-2">{{ $bus->lokasi_tujuan }}</td>
    <td class="border border-gray-300 p-2 flex justify-around">
        <!-- Tombol Edit -->
        <a href="{{ route('editbusadmin', $bus->id_bus) }}" class="bg-blue-500 text-white py-1 px-3 rounded-lg hover:bg-blue-600">
    Edit
</a>

        <!-- Tombol Hapus -->
        <form action="{{ route('bus.destroy', $bus->id_bus) }}" method="POST">
            @csrf
            @method('DELETE')
            <button type="submit" class="bg-red-500 text-white py-1 px-3 rounded-lg hover:bg-red-600"
                onclick="return confirm('Apakah Anda yakin ingin menghapus bus ini?')">
                Hapus
            </button>
        </form>
    </td>
</tr>
@endforeach

            </tbody>
        </table>
        <div class="mt-4 text-left">
    <a href="{{ route('tambahbus') }}" class="bg-blue-500 text-white py-2 px-6 rounded-lg hover:bg-blue-600">
        Tambah Bus
    </a>
</div>
    </div>
</div>
@endsection
