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
        Schema::create('pesananas', function (Blueprint $table) {
            $table->id();
            $table->foreignId('kode_layanan')->constrained('layanans')->cascadeOnDeleted();
            $table->varchar(100)('nama_pelanggan');
            $table->date('tanggal_masuk');
            $table->decimal('jumlah');
            $table->int('total_biaya');
            $table->enum('proses','selesai')('status');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pesananas');
    }
};
