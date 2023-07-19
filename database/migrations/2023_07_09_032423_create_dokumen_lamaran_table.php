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
        Schema::create('dokumen_lamaran', function (Blueprint $table) {
            $table->id();
            $table->foreignId('pelamar_id')->constrained('pelamar')->cascadeOnDelete()->cascadeOnUpdate();
            $table->string('cv_lamaran');
            $table->string('ijazah');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('dokumen_lamaran');
    }
};
