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
        Schema::create('users', function (Blueprint $table) {
            $table->unsignedBigInteger('user_id')->autoIncrement()->primary();
            $table->string('name', 200); // Nama pengguna
            $table->string('email', 200)->unique(); // Email pengguna
            $table->string('password', 200); // Kata sandi pengguna
            $table->string('phone', 20)->nullable(); // Nomor telepon
            $table->string('icon', 250)->nullable(); // Nomor telepon
            $table->enum('role', ['admin', 'user'])->default('user'); // Peran pengguna
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('users');
    }
};
