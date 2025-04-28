<?php
namespace App\Http\Controllers;
use App\Models\Bus;
use Illuminate\Support\Facades\DB;

use Illuminate\Http\Request;

class BusController extends Controller
{
    public function index()
    {
        return view('daftarbus');
    }
    public function showBusList() {
        $busList = DB::table('bus')->get(); // Ambil semua data bus dari DB
        return view('daftarbus', ['busList' => $busList]);
    }

    public function pemesanan($id_bus)
    {
        // Mengambil detail bus berdasarkan id_bus
        $bus = DB::table('bus')->where('id_bus', $id_bus)->first();

        // Mengarahkan ke view pemesanan dengan data bus
        return view('pemesanan', compact('bus'));
    }


}
