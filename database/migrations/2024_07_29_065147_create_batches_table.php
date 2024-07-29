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
        Schema::create('batches', function (Blueprint $table) {
            $table->id();
            $table->foreignId('course_id')->constrained('courses')->cascadeOnDelete();
            $table->string('batch_no');
            $table->string('batch_code');
            $table->enum('class_type',['Online','Offline','Both'])->default('Offline');
            $table->string('class_start')->default('New batch will start');
            $table->string('class_rutine');
            $table->string('class_time');
            $table->integer('total_class');
            $table->integer('total_seat');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('batches');
    }
};
