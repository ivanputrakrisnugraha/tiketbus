<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\BusController;
use App\Http\Controllers\PemesananController; // ✅ Perbaikan nama class
use App\Http\Controllers\LoginPelangganController;
use App\Http\Controllers\AdminBusController;

// Route halaman utama
Route::get('/', function () {
    return view('welcome');
});

// Route::post('/loginpelanggan/auth', [LoginPelangganController::class, 'login'])->name('loginpelanggan.auth');



// ✅ Route ke halaman login form pelanggan
Route::get('/loginpelanggan', [LoginPelangganController::class, 'showLoginForm'])->name('loginpelanggan');

// ✅ Route untuk proses autentikasi login pelanggan (POST)
Route::any('/loginpelanggan/auth', [LoginPelangganController::class, 'login'])->name('loginpelanggan.auth');

// ✅ Route register pelanggan
Route::get('/register', [AuthController::class, 'register'])->name('register');
Route::post('/register', [AuthController::class, 'store'])->name('register.store');

// ✅ Route daftar bus (Hanya GET)
Route::get('/daftarbus', [BusController::class, 'showBusList']);
Route::get('/daftarbus', [BusController::class, 'showBusList'])->name('daftarbus');

Route::any('/login', function () {
    include '../app/Http/Controllers/login.php';  // Pastikan path ini benar
})->name('login');


// ✅ Route halaman pemesanan setelah daftar bus
Route::get('/pemesanan', [PemesananController::class, 'index'])->name('pemesanan');
Route::post('/pemesanan', [PemesananController::class, 'store'])->name('pemesanan.store');

Route::get('/pemesanan/{id_bus}', function ($id_bus) {
    $bus = DB::table('bus')->where('id_bus', $id_bus)->first(); // Ambil data bus dari DB berdasarkan ID
    session(['bus' => $bus]);
    return view('pemesanan', ['bus' => $bus]);
})->name('pemesanan'); // ✅ POST untuk pemesanan

// ✅ Route pilih kursi setelah pemesanan
Route::get('/pilihkursi', [PemesananController::class, 'pilihKursi'])->name('pilihkursi');
// Route POST untuk memproses pemesanan, lalu lanjut ke pilihkursi
Route::post('/pilihkursi', [PemesananController::class, 'pilihKursi'])->name('pilihkursi');
; // ✅ Perbaiki method POST

// ✅ Route checkout setelah memilih kursi
Route::get('/checkout', function () {
    return view('checkout');
})->name('checkout');

Route::get('/halaman-berikutnya', function () {
    return view('halaman_berikutnya'); // Pastikan ada file ini di `resources/views`
})->name('halamanBerikutnya');


// ✅ untuk menampilkan form data pelanggan  (pelanggan)
Route::get('/datapelanggan', function () {
    return view('datapelanggan'); // Menampilkan file datapelanggan.blade.php
})->name('datapelanggan');


// ✅ metode pembayaran (pelanggan)
Route::get('/metodepembayaran', function () {
    return view('metodepembayaran');
})->name('metodepembayaran'); // Tambahkan nama untuk route ini


// Route untuk memproses form (nanti bisa diubah untuk controller)
Route::post('/proses_pelanggan', function (Illuminate\Http\Request $request) {
    // Ambil data dari form dan lakukan aksi (simpan ke database atau lainnya)
    $data = $request->all();
    dd($data); // Debug: dump & die untuk melihat hasil input
})->name('proses_pelanggan');


// BAGIAN ADMIN DISINIIIIIIIIIIIIIIIIIIIIIIIIIIIIIIIIIIIIIIIIIIIIIIIIIIIIIIIIIIIII

// ✅ halaman utama admin (admin)
Route::any('/adminhome', function () {
    return view('adminhome');
})->name('adminhome');

// Route::any('/adminhome', function () {
//     include '../resources/views/adminhome.blade.php';  // Pastikan path ini benar
// })->name('adminhome');

// ✅ data bus admin (admin)
Route::get('/databusadmin', [AdminBusController::class, 'showBusListAdmin'])->name('databusadmin');
// Route Tambah Data
Route::get('/bus/create', [AdminBusController::class, 'create'])->name('bus.create');
Route::post('/bus/store', [AdminBusController::class, 'store'])->name('bus.store');
// Route Edit dan Update Data

Route::get('/editbusadmin/{id_bus}', [AdminBusController::class, 'edit'])->name('editbusadmin');
// Route to show the Add Bus form
Route::get('/tambahbus', [AdminBusController::class, 'create'])->name('tambahbus');
// Route to handle the Add Bus form submission
Route::post('/tambahbus', [AdminBusController::class, 'store'])->name('bus.store');
Route::put('/bus/update/{id}', [AdminBusController::class, 'update'])->name('bus.update');
Route::delete('/bus/{id}', [AdminBusController::class, 'destroy'])->name('bus.destroy');

// ✅ pesanan dan pembayaran admin (admin)
Route::get('/pesanandanpembayaranadmin', function () {
    return view('pesanandanpembayaranadmin');
})->name('pesanandanpembayaranadmin');

// ✅ Route rute dan harga tiket admin (admin)
Route::get('/rutedanhargatiketadmin', function () {
    return view('rutedanhargatiketadmin');
})->name('rutedanhargatiketadmin'); // Tambahkan method ->name() di sini

// ✅ pembatalan tiket admin (admin)
Route::get('/pembatalantiketadmin', function () {
    return view('pembatalantiketadmin');
})->name('pembatalantiketadmin'); // Tambahkan method ->name() di sini


// Route logout menggunakan POST
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

Route::post('/invoice', function (Illuminate\Http\Request $request) {
    // Ambil data dari request
    $jenisSeats = $request->input('jenis_seats');
    $nomorTempat = $request->input('nomor_tempat');

    // Proses data atau simpan ke session / database
    session(['jenis_seats' => $jenisSeats, 'nomor_tempat' => $nomorTempat]);

    return view('invoice', compact('jenisSeats', 'nomorTempat'));
})->name('invoice');
