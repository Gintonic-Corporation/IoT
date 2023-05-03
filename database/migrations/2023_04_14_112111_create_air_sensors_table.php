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
        Schema::create('air_sensors', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('compressorID')->references('id')->on('compressors');
            $table->date('date');
            $table->integer('meter');
            $table->integer('consumption')->nullable();
            $table->integer('producedAir');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('air_sensors');
    }
};
