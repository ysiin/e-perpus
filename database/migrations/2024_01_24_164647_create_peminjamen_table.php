<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('peminjaman', function (Blueprint $table) {
            $table->id();
            $table->foreignId('anggota_id')->constrained('anggota');
            $table->foreignId('buku_id')->constrained('buku');
            $table->date('tanggal_peminjaman');
            $table->date('tanggal_pengembalian');
            $table->string('kondisi_buku_saat_dipinjam', 125);
            $table->string('kondisi_buku_saat_dikembalikan', 125);
            $table->integer('denda');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('peminjaman');
    }
};
