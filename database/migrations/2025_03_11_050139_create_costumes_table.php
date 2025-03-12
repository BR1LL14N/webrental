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
        Schema::create('kostums', function (Blueprint $table) {
            $table->integer('kostum_id')->autoIncrement()->primary();
            $table->string('kostum_name', 100)->index(); // Nama kostum
            $table->string('kostum_description', 200); // Deskripsi kostum
            $table->string('kostum_image', 200); // Foto kostum
            $table->unsignedBigInteger('kostum_price')->default(0); // Harga sewa kostum
            $table->bigInteger('jenis_kostum_id');// ID jenis kostum
            $table->timestamps();

            $table->foreign('jenis_kostum_id')->references('jenis_kostum_id')->on('jenis_kostum')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('kostums');
    }
};
