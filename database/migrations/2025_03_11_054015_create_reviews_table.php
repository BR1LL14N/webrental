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
            $table->bigInteger('review_id')->autoIncrement()->primary();
            $table->bigInteger('user_id'); // ID pengguna
            $table->integer('kostum_id'); // ID kostum
            $table->text('review'); // Isi review
            $table->integer('rating')->default(0); // Rating
            $table->timestamps();

            $table->foreign('user_id')->references('user_id')->on('users')->onDelete('cascade');
            $table->foreign('kostum_id')->references('kostum_id')->on('kostums')->onDelete('cascade');
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
