<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void {
        Schema::create('reviews', function (Blueprint $table) {
            $table->id('id_review')->primary();
            $table->integer('rating');
            $table->text('komentar');
            $table->date('tanggal_review');
            $table->unsignedBigInteger('id_user');
            $table->string('id_destinasi')->nullable();
            $table->string('id_kuliner')->nullable();
            
            $table->foreign('id_user')->references('id_user')->on('users')->onDelete('cascade');
            $table->foreign('id_destinasi')->references('id_destinasi')->on('destinasi_wisata')->onDelete('cascade');
            $table->foreign('id_kuliner')->references('id_kuliner')->on('kuliner')->onDelete('cascade');

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
