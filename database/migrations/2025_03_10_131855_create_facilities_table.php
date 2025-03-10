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
        Schema::create('facilities', function (Blueprint $table) {
            $table->unsignedBigInteger('facilities_id')->autoIncrement()->primary();
            $table->string('name', 200)->index(); // Nama fasilitas menggunakan konsep array dalam DB yang dimana key nya adalah name dan value nya adalah nama fasilitas
            $table->string('icon', 250)->nullable(); // Icon fasilitas
            $table->timestamp('created_at');
            $table->timestamp('updated_at');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('facilities');
    }
};
