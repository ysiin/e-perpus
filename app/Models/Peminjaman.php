<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Peminjaman extends Model
{
    use HasFactory;
    protected $table = 'peminjaman';
    protected $fillable = ['anggota_id', 'buku_id', 'tanggal_peminjaman', 'tanggal_pengembalian', 'kondisi_buku_saat_dipinjam', 'kondisi_buku_saat_dikembalikan', 'denda'];

    public function anggota()
    {
        return $this->belongsTo(Anggota::class);
    }

    public function buku()
    {
        return $this->belongsTo(Buku::class);
    }
}
