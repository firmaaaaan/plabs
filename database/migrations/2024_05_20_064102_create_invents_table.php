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
        Schema::create('invents', function (Blueprint $table) {
            $table->uuid('id_invent')->primary();
            $table->string('gambar');
            $table->string('nama_invent');
            $table->date('tanggal_pembelian');
            $table->date('jumlah');
            $table->text('keterangan');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('invents');
    }
};
