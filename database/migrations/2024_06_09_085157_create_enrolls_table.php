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
        Schema::create('enrolls', function (Blueprint $table) {
            $table->id();
            $table->foreignId('student_enrol_id')->constrained('student_enrollments')->cascadeOnDelete();
            $table->string('country');
            $table->string('state');
            $table->string('mobile_no');
            $table->string('email');
            $table->text('current_address');
            $table->string('studentID');
            $table->enum('enroll_status',['Waiting','Accepted','Rejected'])->default('Waiting');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('enrolls');
    }
};
