<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Bus extends Model
{
    use HasFactory;

    protected $table = 'bus';  // Nama tabel di database

    protected $primaryKey = 'id_bus';  // Primary key tabel

    protected $fillable = ['nm_bus', 'tipe_bus', 'harga_tiket', 'kapasitas', 'WAKTU', 'lokasi_awal', 'lokasi_tujuan'];  // Kolom yang bisa diisi massal

    public $timestamps = false;  // Jika tidak ada kolom created_at dan updated_at
}
