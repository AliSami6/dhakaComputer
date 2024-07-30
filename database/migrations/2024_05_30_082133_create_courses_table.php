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
        Schema::create('courses', function (Blueprint $table) {
            $table->id();
            $table->string('course_title');
            $table->string('slug');
            $table->text('course_short_desc')->nullable();
            $table->longText('description')->nullable();
            $table->foreignId('category_id')->constrained('categories')->cascadeOnDelete();
            $table->enum('level', ['Beginner', 'Advanced', 'Intermediate'])->default('Beginner');
            $table->string('language')->default('English');
            $table->enum('course_status', ['Active', 'Private', 'Upcoming'])->default('Private');
            $table->boolean('is_free')->nullable();
            $table->double('price',[8,2])->default(0);
            $table->double('discounted_price',[8,2])->default(0);
            $table->tinyInteger('expire_time')->default(0);
            $table->string('duration')->nullable();
            $table->string('enroll_date')->nullable();
            $table->timestamps();
        });

        
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('courses');
    }
};