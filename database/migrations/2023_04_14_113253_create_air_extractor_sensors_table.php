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
        Schema::create('air_extractor_sensors', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('airExtractorID')->references('id')->on('airExtractors');
            $table->date('date');
            $table->integer('meter');
            $table->integer('consumption');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('air_extractor_sensors');
    }
};
