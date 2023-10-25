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
        Schema::create('rekam_mediss', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->foreignId('pasien_id');
            $table->foreignId('dokter_id');
            $table->string('kondisi');
            $table->decimal('suhu_tubuh(°C)');
            $table->string('image');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('rekam_medis');
    }
};
