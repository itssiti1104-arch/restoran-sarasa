<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::table('orders', function (Blueprint $table) {
            $table->timestamp('pembayaran_dikonfirmasi_at')->nullable();
            $table->timestamp('mulai_proses_at')->nullable();
            $table->timestamp('selesai_at')->nullable();
        });
    }

    public function down(): void
    {
        Schema::table('orders', function (Blueprint $table) {
            $table->dropColumn([
                'pembayaran_dikonfirmasi_at',
                'mulai_proses_at',
                'selesai_at'
            ]);
        });
    }
};