@extends('layouts.app')

@section('title', 'Pembatalan Tiket')

@section('content')
    <div class="max-w-6xl mx-auto bg-white rounded-lg shadow-lg">
        <!-- Header Halaman -->
        <div class="bg-green-600 text-white text-xl font-bold p-4 rounded-t-lg flex justify-between items-center">
            <span>Pembatalan Tiket</span>
            <a href="{{ route('adminhome') }}" class="text-3xl">
    <i class="fas fa-home"></i> <!-- Ikon FontAwesome -->
</a>
        </div>
        <div class="p-4">
            <table class="w-full text-left border-collapse border border-gray-300">
                <thead class="bg-gray-100">
                    <tr>
                        <th class="border border-gray-300 p-3 text-sm font-medium text-gray-700">ID Pembatalan</th>
                        <th class="border border-gray-300 p-3 text-sm font-medium text-gray-700">ID Tiket</th>
                        <th class="border border-gray-300 p-3 text-sm font-medium text-gray-700">Waktu Pembatalan</th>
                        <th class="border border-gray-300 p-3 text-sm font-medium text-gray-700">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @for ($i = 0; $i < 3; $i++)
                    <tr class="hover:bg-gray-100">
                        <td class="border border-gray-300 p-3"></td>
                        <td class="border border-gray-300 p-3"></td>
                        <td class="border border-gray-300 p-3"></td>
                        <td class="border border-gray-300 p-3">
                            <button class="bg-red-600 text-white px-4 py-2 rounded hover:bg-red-700">Ok</button>
                        </td>
                    </tr>
                    @endfor
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection
