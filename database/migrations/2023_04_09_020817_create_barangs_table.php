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
        Schema::create('barang', function (Blueprint $table) {
            $table->string('kodeBarang');
            $table->unique('kodeBarang');
            $table->string('namaBarang');
            $table->string('kategoriBarang');
            $table->integer('harga');
            $table->integer('qty');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('barang');
    }
};
