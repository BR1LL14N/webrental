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
        Schema::create('rentals', function (Blueprint $table) {
            $table->bigInteger('rental_id')->autoIncrement()->primary();
            $table->bigInteger('user_id'); // ID pengguna
            $table->integer('kostum_id'); // ID kostum
            $table->bigInteger('kostum_size_id'); // ID ukuran kostum
            $table->date('rental_date'); // Tanggal sewa
            $table->date('return_date'); // Tanggal kembali
            $table->decimal('total_price', 10, 2)->default(0); // Total harga sewa
            $table->string('status', 20)->default('pending'); // Status sewa
            $table->decimal('penalty', 10, 2)->default(0); // Denda
            $table->unsignedBigInteger('payment_method_id'); // ID pembayaran
            $table->timestamps();

            $table->foreign('user_id')->references('user_id')->on('users')->onDelete('cascade');
            $table->foreign('kostum_id')->references('kostum_id')->on('kostums')->onDelete('cascade');
            $table->foreign('kostum_size_id')->references('kostum_size_id')->on('kostum_size')->onDelete('cascade');
            $table->foreign('payment_method_id')->references('payment_method_id')->on('payment_method')->onDelete('cascade');

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('rentals');
    }
};
