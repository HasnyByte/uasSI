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
        Schema::create('kuliner', function (Blueprint $table) {
            $table->string('id_kuliner')->primary();
            $table->string('nama_kuliner');
            // $table->text('deskripsi_makanan');
            $table->string('lokasi_kuliner');
            $table->string('contact_person');
            $table->string('foto_kuliner');
            $table->string('jam_operasional');
            $table->string('location_id');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('kuliner');
    }
};
