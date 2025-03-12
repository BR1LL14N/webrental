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
            $table->bigInteger('user_id')->autoIncrement()->primary();
            $table->string('user_name', 100); // Nama pengguna
            $table->string('user_email', 100)->unique(); // Email pengguna
            $table->string('user_password', 250); // Kata sandi pengguna
            $table->string('user_phone', 40); // Nomor telepon pengguna
            $table->string('user_address', 200); // Alamat pengguna
            $table->string('user_role', 30)->default('user'); // Role pengguna
            $table->string('icon', 200)->nullable(); // Foto pengguna
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
