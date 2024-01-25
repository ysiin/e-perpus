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
        Schema::create('buku', function (Blueprint $table) {
            $table->id();
            $table->foreignId('kategori_id')->constrained('kategori');
            $table->foreignId('penerbit_id')->constrained('penerbit');
            $table->string('judul');
            $table->string('pengarang', 125);
            $table->year('tahun_terbit');
            $table->string('isbn', 50);
            $table->integer('jumlah_buku');
            $table->integer('buku_baik')->nullable();
            $table->integer('buku_rusak')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('buku');
    }
};
