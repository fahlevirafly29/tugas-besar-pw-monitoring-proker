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
    Schema::create('prokers', function (Blueprint $table) {
        $table->id();
        $table->string('nama_proker'); // Judul Proker
        $table->string('divisi');      // Divisi Penanggung Jawab
        $table->text('deskripsi');     // Detail Kegiatan
        $table->enum('status', ['Belum', 'Sedang', 'Selesai'])->default('Belum'); 
        $table->timestamps();
    });
}

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('prokers');
    }
};
