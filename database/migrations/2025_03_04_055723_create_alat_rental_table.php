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
        Schema::create('alat_rental', function (Blueprint $table) {
            $table->unsignedBigInteger('alat_id')->autoIncrement()->primary();
            $table->string('nama', 200); // Nama alat
            $table->string('jenis', 200); // Jenis alat
            $table->string('icon', 250)->nullable(); // Icon alat
            $table->string('deskripsi', 500)->nullable(); // Deskripsi alat
            $table->integer('jumlah_unit'); // Stok alat
            $table->decimal('harga_sewa', 10, 2); // Harga sewa per hari
            $table->enum('status', ['tersedia', 'reparasi', 'sedang disewa'])->default('tersedia');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('alat_rental');
    }
};
