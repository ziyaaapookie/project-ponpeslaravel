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
        Schema::create('program_pendidikans', function (Blueprint $table) {
            $table->id();
            $table->string('image')->nullable();
            $table->string('judulprogram')->nullable();
            $table->string('deskripsiprogram')->nullable();
            $table->string('tahun')->nullable();
            $table->string('jumlahsantri')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('program_pendidikans');
    }
};
