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
        Schema::table('orders', function (Blueprint $table) {

            $table->integer('uang_diterima')
                ->nullable()
                ->after('total_harga');

            $table->integer('kembalian')
                ->nullable()
                ->after('uang_diterima');

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('orders', function (Blueprint $table) {

            $table->dropColumn([
                'uang_diterima',
                'kembalian'
            ]);

        });
    }
};
