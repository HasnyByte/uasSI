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
        Schema::create('destinasi_wisata', function (Blueprint $table) {
            $table->string('id_destinasi')->primary();
            $table->string('nama_wisata');
            $table->text('deskripsi_wisata');
            $table->string('foto_wisata');
            $table->string('lokasi_wisata');
            $table->string('jam_operasional');
            $table->string('tiket');
            $table->string('location_id');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('destinasi_wisata');
    }
};
