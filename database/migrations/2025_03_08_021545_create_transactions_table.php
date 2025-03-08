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
        Schema::create('transactions', function (Blueprint $table) {
            $table->unsignedBigInteger('transaction_id')->autoIncrement()->primary();
            $table->unsignedBigInteger('user_id'); // Kolom user_id harus dibuat secara eksplisit
            $table->unsignedBigInteger('alat_id'); // Kolom alat_id harus dibuat secara eksplisit
            $table->unsignedBigInteger('payment_method_id'); // Kolom payment_method_id harus dibuat secara eksplisit
            $table->date('tanggal_mulai');
            $table->date('tanggal_selesai');
            $table->enum('status', ['pending', 'diproses', 'disetujui'])->default('pending'); 
            $table->timestamps();
                
            // Menambahkan Foreign Key
            $table->foreign('user_id')->references('user_id')->on('users')->onDelete('cascade');
            $table->foreign('alat_id')->references('alat_id')->on('alat_rental')->onDelete('cascade');
            $table->foreign('payment_method_id')->references('payment_method_id')->on('payment_method')->onDelete('cascade');
        });
        
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('transactions');
    }
};
