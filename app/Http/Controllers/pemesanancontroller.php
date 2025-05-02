<?php

namespace App\Http\Controllers;

use App\Models\Kursi;

use Illuminate\Http\Request;

class PemesananController extends Controller
{
    // ✅ Menampilkan halaman pemesanan
    public function index(Request $request)
    {
        $tipeBus = $request->input('tipe_bus', '');
        return view('pemesanan', compact('tipeBus'));
    }

    // ✅ Menyimpan pemesanan tiket
    public function store(Request $request)
    {
        // Validasi input
        $request->validate([
            'lokasi_awal' => 'required',
            'lokasi_tujuan' => 'required',
            'tanggal_berangkat' => 'required|date',
            'tipe_bus' => 'required',
            'jam_keberangkatan' => 'required',
            'jumlah' => 'required|integer|min:1',
        ]);

        // Simpan data pemesanan ke session (sementara)
        session(['pemesanan' => $request->all()]);

        return redirect()->route('pilihkursi')->with('success', 'Silakan pilih kursi.');
    }

    // ✅ Menampilkan halaman pilih kursi
    public function pilihKursi(Request $request)
    {


        $tipeBus = $request->input('tipe_bus');        // Ambil input 'tipe_bus'
        $namaBus = $request->input('nm_bus');
        $tanggalBerangkat = $request->input('tanggal_berangkat');

        // dd($request->all());
        // dd($tanggalBerangkat);
        // Ambil kursi berdasarkan tipe bus dari database
        $kursi = Kursi::where('nama_bus', $namaBus)
                    ->where('tipe_bus', $tipeBus)
                    ->get();

        return view('pilihkursi', compact('tipeBus','namaBus', 'kursi', 'tanggalBerangkat'));
        session(['pemesanan' => $request->all()]);
    }

    // ✅ Menyimpan kursi yang dipilih
    public function simpanKursi(Request $request)
    {
        $request->validate([
            'kursi' => 'required|array|min:1',
        ]);

        session(['kursi_terpilih' => $request->input('kursi')]);

        return redirect()->route('checkout')->with('success', 'Kursi berhasil dipilih. Lanjut ke checkout.');
    }
}
