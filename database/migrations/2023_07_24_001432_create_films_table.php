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
        Schema::create('films', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('synopsis');
            $table->string('year');
            $table->string('duration');
            $table->integer('price');
            $table->unsignedBigInteger('format_id');
            $table->string('image');
            $table->timestamps();

            $table->foreign('format_id')->references('id')->on('formats');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('films');
    }
};
