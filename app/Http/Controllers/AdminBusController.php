<?php

namespace App\Http\Controllers;
use App\Models\Bus;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class AdminBusController extends Controller
{
    // Menampilkan semua data bus
    public function index()
    {
        $bus = Bus::all(); // Mengambil semua data bus
        return view('databusadmin', compact('bus'));
    }

    public function showBusListAdmin()
    {
        $busList = DB::table('bus')->get(); // Mengambil semua data dari tabel 'bus'
        return view('databusadmin', ['busList' => $busList]); // Mengirim data ke view 'databusadmin'
    }

    // Menampilkan form tambah bus
    public function create()
    {
        return view('tambahbus'); // Return the 'Tambah Bus' form view
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'nm_bus' => 'required|string|max:255',
            'tipe_bus' => 'required|string',
            'harga_tiket' => 'required|string',
            'kapasitas' => 'required|integer',
            'WAKTU' => 'required|date_format:H:i',
            'lokasi_awal' => 'required|string|max:255',
            'lokasi_tujuan' => 'required|string|max:255',
        ]);
        Bus::create($validatedData);
        return redirect()->route('databusadmin')->with('success', 'Data bus berhasil ditambahkan!');
    }



    // Menampilkan form edit data bus
    public function edit($id)
    {
        $bus = Bus::find($id);
        return view('editbusadmin', compact('bus'));
    }

    // Mengupdate data bus
    public function update(Request $request, $id)
{
    $request->validate([
        'WAKTU' => 'nullable|date_format:H:i',
    ]);

    $bus = Bus::find($id);
    $bus->nm_bus = $request->input('nm_bus');
    $bus->tipe_bus = $request->input('tipe_bus');
    $bus->harga_tiket = $request->input('harga_tiket');
    $bus->kapasitas = $request->input('kapasitas');
    $bus->WAKTU = $request->input('WAKTU') ? $request->input('WAKTU') . ':00' : $bus->WAKTU;
    $bus->lokasi_awal = $request->input('lokasi_awal');
    $bus->lokasi_tujuan = $request->input('lokasi_tujuan');
    $bus->save();

    // Redirect ke halaman daftar bus setelah update
    return redirect()->route('databusadmin')->with('success', 'Data bus berhasil diupdate!');


        // Find the bus by ID
        $bus = Bus::find($id);

        if ($bus) {
            // Update the bus attributes
            $bus->nm_bus = $request->input('nm_bus');
            $bus->tipe_bus = $request->input('tipe_bus');
            $bus->kapasitas = $request->input('kapasitas');
            $bus->WAKTU = $request->input('WAKTU');
            $bus->lokasi_awal = $request->input('lokasi_awal');
            $bus->lokasi_tujuan = $request->input('lokasi_tujuan');

            // Save changes to the database
            $bus->save();

            return redirect()->route('admin.bus.index')->with('success', 'Data bus berhasil diupdate!');
        } else {
            return redirect()->route('admin.bus.index')->with('error', 'Data bus tidak ditemukan!');
        }
    }

    public function destroy($id)
    {
        // Hapus data bus berdasarkan id
        DB::table('bus')->where('id_bus', $id)->delete();

        // Redirect ke halaman daftar bus dengan pesan sukses
        return redirect()->route('databusadmin')->with('success', 'Data bus berhasil dihapus!');
    }

}
