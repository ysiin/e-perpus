<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Buku extends Model
{
    use HasFactory;
    protected $table = 'buku';
    protected $fillable = ['kategori_id', 'penerbit_id', 'judul', 'pengarang', 'tahun_terbit', 'isbn', 'jumlah_buku', 'buku_baik', 'buku_rusak'];

    public function penerbit()
    {
        return $this->belongsTo(Penerbit::class);
    }

    public function kategori()
    {
        return $this->belongsTo(Kategori::class);
    }
}
