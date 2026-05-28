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
        Schema::create('orders', function (Blueprint $table) {
            $table->id();

            $table->string('user_id')->nullable();

            $table->string('kode_order');

            $table->string('nama_pelanggan');

            $table->string('nomor_meja');

            $table->text('catatan')->nullable();

            $table->integer('total_harga');

            $table->string('status')->default('menunggu pembayaran');
            /*
            menunggu pembayaran
            pembayaran dikonfirmasi
            diproses
            selesai
            dibatalkan
            */

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('orders');
    }
};
