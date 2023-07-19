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
        Schema::create('pesanan', function (Blueprint $table) {
            $table->id();
            $table->foreignId('id_layanan')->constrained('layanan')->cascadeOnDelete()->cascadeOnUpdate();
            $table->string('nama');
            $table->text('alamat');
            $table->string('no_telepon');
            $table->string('email');
            $table->dateTime('waktu_pesanan');
            $table->string('no_faktur');
            $table->date('tgl_faktur');
            $table->date('tgl_pasang');
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
