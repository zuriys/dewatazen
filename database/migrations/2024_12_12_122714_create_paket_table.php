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
        Schema::create('paket', function (Blueprint $table) {
            $table->id('id_paket');
            $table->unsignedBigInteger('id_penginapan');
            $table->string('nama', length: 40);
            $table->integer('jumlah_kamar',);
            $table->text('deskripsi_fasilitas');
            $table->string('alamat',length:30);
            $table->float('harga',);
            $table->timestamps();
        
            $table->foreign('id_penginapan')->references('id_penginapan')->on('penginapan')->onDelete('cascade');
        
        });

        
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('paket');
    }
};
