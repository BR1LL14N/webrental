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
        Schema::create('kostum_size', function (Blueprint $table) {
            $table->bigInteger('kostum_size_id')->autoIncrement()->primary();
            $table->string('size_name', 20)->index();
            $table->unsignedBigInteger('stock')->default(0);
            $table->boolean('is_available')->default(true);
            $table->integer('kostum_id');
            $table->timestamps();

            $table->foreign('kostum_id')->references('kostum_id')->on('kostums')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('kostum_size');
    }
};
