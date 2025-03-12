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
        Schema::create('jenis_kostum', function (Blueprint $table) {
            $table->bigInteger('jenis_kostum_id')->autoIncrement()->primary();
            $table->string('jenis_kostum_name', 100)->index(); // Nama jenis kostum
            $table->timestamps();

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('jineis_kostum');
    }
};
