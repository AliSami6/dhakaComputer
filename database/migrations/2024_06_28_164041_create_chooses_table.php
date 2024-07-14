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
        Schema::create('chooses', function (Blueprint $table) {
            $table->id();
            $table->string('choose_image')->nullable();
            $table->integer('choose_years')->nullable();
            $table->string('choose_title')->nullable();
            $table->string('choose_subtitle')->nullable();
            $table->string('content_one')->nullable();
            $table->string('content_two')->nullable();
            $table->string('content_three')->nullable();
            $table->text('short_description')->nullable();
            $table->string('button_text')->nullable();
            $table->string('button_url')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('chooses');
    }
};