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
        Schema::create('lessions', function (Blueprint $table) {
            $table->id();
            $table->integer('select_lession_type');
            $table->string('lession_title');
            $table->foreignId('section_id')->constrained('sections')->cascadeOnDelete();
            $table->string('document_type')->nullable();
            $table->string('attachment')->nullable();
            $table->string('image')->nullable();
            $table->string('video_url')->nullable();
            $table->string('video_resource')->nullable();
            $table->string('duration')->nullable();
            $table->longText('description')->nullable();
            $table->longText('summary');
            $table->tinyInteger('is_free_lession')->default(0);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('lessions');
    }
};
