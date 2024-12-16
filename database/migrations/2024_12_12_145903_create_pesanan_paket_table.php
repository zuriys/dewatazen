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
        Schema::create('pesanan_paket', function (Blueprint $table) {
            $table->id('id_pesanan'); // kolom id_pesanan sebagai primary key dengan auto increment
            $table->unsignedBigInteger('id_pengguna'); // kolom id_pengguna, tanpa auto increment
            $table->unsignedBigInteger('id_paket')->nullable()->default(0); // kolom id_penginapan, tanpa auto increment
            $table->dateTime('tgl_masuk')->nullable();
            $table->dateTime('tgl_keluar')->nullable();
            $table->integer('harga_total');
            $table->double('harga');
            $table->string('tipe_kasur');
            $table->string('status', 20)->nullable();

            // Menambahkan foreign key untuk kolom id_pengguna dan id_penginapan
            $table->foreign('id_pengguna')->references('id_pengguna')->on('pengguna')->onDelete('cascade');
            $table->foreign('id_paket')->references('id_paket')->on('paket')->onDelete('cascade');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pesanan');
    }
};
