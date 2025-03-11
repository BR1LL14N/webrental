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
        Schema::create('envoice', function (Blueprint $table) {
            $table->bigInteger('envoice_id')->autoIncrement()->primary();
            $table->bigInteger('rental_id'); // ID sewa
            $table->unsignedBigInteger('payment_method_id'); // ID metode pembayaran
            $table->string('envoice_number', 50)->unique(); // Nomor faktur
            $table->decimal('total_price', 10, 2)->default(0); // Total harga sewa
            $table->timestamps();

            $table->foreign('rental_id')->references('rental_id')->on('rentals')->onDelete('cascade');
            $table->foreign('payment_method_id')->references('payment_method_id')->on('payment_method')->onDelete('cascade');
            
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('envoice');
    }
};
