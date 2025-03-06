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
        Schema::create('reviews', function (Blueprint $table) {
            $table->unsignedBigInteger('review_id')->autoIncrement()->primary();
            $table->unsignedBigInteger('user_id');
            $table->unsignedBigInteger('alat_id');
            $table->string('review', 500);
            $table->integer('rating');
            $table->foreign('user_id')->references('user_id')->on('users');
            $table->foreign('alat_id')->references('alat_id')->on('alat_rental');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('reviews');
    }
};
