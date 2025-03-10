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
        Schema::create('car_facilities', function (Blueprint $table) {
            $table->unsignedBigInteger('car_facilities_id')->autoIncrement()->primary();
            $table->unsignedBigInteger('alat_id')->index();
            $table->unsignedBigInteger('facilities_id')->index();
            $table->timestamps();

            $table->foreign('alat_id')->references('alat_id')->on('alat_rental')->onDelete('cascade');
            $table->foreign('facilities_id')->references('facilities_id')->on('facilities')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('car_facilities');
    }
};
