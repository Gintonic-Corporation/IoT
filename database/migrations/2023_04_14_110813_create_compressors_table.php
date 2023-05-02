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
        Schema::create('compressors', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->unsignedBigInteger('factoryID');
            $table->timestamps();

            $table->foreign('factoryID')->references('id')->on('factories');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('compressors');
    }
};
