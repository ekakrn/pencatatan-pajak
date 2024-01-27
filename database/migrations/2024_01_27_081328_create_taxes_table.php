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
        Schema::create('taxes', function (Blueprint $table) {
            $table->id();
            $table->integer('penjualan');
            $table->integer('beban_administrasi');
            $table->integer('beban_pemasaran');
            $table->integer('beban_lainnya');
            $table->integer('pendapatan_lain');
            $table->integer('total');
            $table->integer('total_dengan_pajak');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('taxes');
    }
};
