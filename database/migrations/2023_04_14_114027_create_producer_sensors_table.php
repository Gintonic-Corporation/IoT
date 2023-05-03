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
        Schema::create('producer_sensors', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('producerID')->references('id')->on('producers');
            $table->date('date');
            $table->integer('meter');
            $table->integer('consumption')->nullable();
            $table->integer('itemsProduced');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('producer_sensors');
    }
};
