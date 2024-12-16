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
        Schema::create('penginapan', function (Blueprint $table) {
            $table->id('id_penginapan');
            $table->string('nama', length: 40)->nullable();
            $table->integer('jumlah_kamar',);
            $table->text('deskripsi_fasilitas');
            $table->string('alamat',length:30);
            $table->float('harga');
            $table->string('url_foto',length: 60);
            $table->boolean('ac')->default(false);
            $table->boolean('parkir')->default(false);
            $table->boolean('taman')->default(false);
            $table->boolean('restoran')->default(false);
            $table->boolean('lift')->default(false);
            $table->boolean('balkon')->default(false);
            $table->boolean('kolam_berenang')->default(false);
            $table->boolean('wifi')->default(false);
            $table->timestamps();
            
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('penginapan');
    }
};
