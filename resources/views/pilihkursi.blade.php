@extends('layouts.app')

@section('title', 'Pilih Kursi')

{{-- Tambahkan link ke file CSS --}}
@section('head')
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
@endsection
<?php
    // dd(session('bus'));
    // dd($tanggalBerangkat);
?>
@section('content')
<div class="min-h-screen bg-gray-100 flex flex-col items-center">
    <!-- Header -->
    <div class="w-full bg-gradient-to-r from-green-500 via-green-600 to-green-700 text-white p-6 shadow-lg">

    <div class="flex items-center justify-between">
        <div class="flex items-center space-x-4">
            <i class="fas fa-bus text-3xl"></i> <!-- Ikon Bus -->
            <span class="text-3xl font-extrabold">Pilih Kursi</span>
        </div>

        <a href="{{ route('daftarbus') }}" class="flex items-center bg-white text-green-600 rounded-full px-4 py-2 hover:bg-green-100 transition">
            <i class="fas fa-home mr-2"></i> Home
        </a>
    </div>

</div>


    <!-- Konten Kursi -->
    <div class="mt-6 flex justify-center">
        <div>
            @if($tipeBus == "Sedang")
                <div class="bg-white shadow-md rounded-lg p-4">
                    <h3 class="text-center font-bold">{{ $tipeBus }} (2-2) + 1 KURSI CD</h3>
                    <div class="grid grid-cols-2 gap-2 mt-4">
                        @foreach($kursi as $kursis)
                            <button
                                onclick="selectKursi(this)"
                                class="w-10 h-10 border rounded-md {{ $kursis->terisi ? 'bg-red-500 cursor-not-allowed' : 'bg-gray-200 hover:bg-blue-500' }}"
                                {{ $kursis->terisi ? 'disabled' : '' }}
                                data-nomor="{{ $kursis->no_kursi }}">
                                {{ $kursis->no_kursi }}
                            </button>
                        @endforeach
                    </div>
                </div>
            @elseif($tipeBus == "Besar")
                <div class="bg-white shadow-md rounded-lg p-4">
                    <h3 class="text-center font-bold">{{ $namaBus }}</h3>
                    <h3 class="text-center font-bold">{{ $tipeBus }} (2-2)</h3>
                    <div class="grid grid-cols-4 gap-2 mt-4">
                        @foreach($kursi as $index => $kursis)
                            @php
                                $isKanan = ($index % 4 >= 2); // posisi kursi kanan (kolom 3-4)
                            @endphp

                            <div class="{{ $isKanan ? 'ml-8' : '' }}">
                                <button
                                    onclick="selectKursi(this)"
                                    class="w-10 h-10 border rounded-md {{ $kursis->terisi ? 'bg-red-500 cursor-not-allowed' : 'bg-gray-200 hover:bg-blue-500' }}"
                                    {{ $kursis->terisi ? 'disabled' : '' }}
                                    data-nomor="{{ $kursis->no_kursi }}">
                                    {{ $kursis->no_kursi }}
                                </button>
                            </div>
                        @endforeach
                    </div>

                </div>
            @else
                <div class="bg-white shadow-md rounded-lg p-4">
                    <h3 class="text-center font-bold">{{ $tipeBus }} (2-2) + 1 KURSI CD</h3>
                    <div class="grid grid-cols-2 gap-2 mt-4">
                        @for ($i = 1; $i <= 23; $i++)
                            <button onclick="selectKursi(this)" class="w-10 h-10 border rounded-md bg-gray-200 hover:bg-blue-500">{{ $i }}</button>
                        @endfor
                    </div>
                </div>
            @endif
        </div>
    </div>

    <!-- Form Input -->
    <div class="mt-6 w-3/4 flex justify-center">
        <!-- <input type="text" placeholder="Jenis Seats (contoh 39 seats 2-2)" class="border p-2 w-1/2"> -->
        <input type="text" placeholder="Nomor Tempat (bisa lebih dari 1)" class="border p-2 w-1/2">
    </div>

    <!-- Tombol Selanjutnya -->
    <a id="nextBtn" href="{{ route('datapelanggan', ['tanggal_berangkat' => $tanggalBerangkat, 'nomor_kursi' => '']) }}"
        class="bg-green-700 text-white font-bold py-2 px-6 rounded-lg hover:bg-green-700">
        Selanjutnya
    </a>
    
<!-- Tombol Kembali -->
<a href="{{ url()->previous() }}" class="block bg-red-700 text-center text-white font-bold py-2 px-6 rounded-lg hover:bg-red-700 trsansition0">
    Kembali
    </a>
</div>
<script>
    function selectKursi(element) {
    const input = document.querySelector('input[placeholder="Nomor Tempat (bisa lebih dari 1)"]');
    let selected = input.value.split(',').map(s => s.trim()).filter(s => s !== '');

    const nomor = element.textContent.trim();

    if (element.classList.contains('bg-green-400')) {
        // Jika sudah terpilih → klik lagi → unselect
        element.classList.remove('bg-green-400');
        selected = selected.filter(s => s !== nomor); // hapus nomor
    } else {
        // Jika belum terpilih → pilih
        element.classList.add('bg-green-400');
        selected.push(nomor);
    }

    input.value = selected.join(', ');
}

document.getElementById('nextBtn').addEventListener('click', function(e) {
    const input = document.querySelector('input[placeholder="Nomor Tempat (bisa lebih dari 1)"]');
    const kursiTerpilih = input.value.trim();

    if (!kursiTerpilih) {
        alert('Pilih minimal 1 kursi!');
        e.preventDefault(); // cegah pindah halaman
        return;
    }

    const baseUrl = "{{ route('datapelanggan', ['tanggal_berangkat' => $tanggalBerangkat]) }}";
    const url = baseUrl + '&nomor_kursi=' + encodeURIComponent(kursiTerpilih);

    this.href = url;
});

</script>
@endsection
