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
        Schema::create('students', function (Blueprint $table) {
            $table->id();
            $table->string('firstName');
            $table->string('lastName');
            $table->string('fathersName');
            $table->string('profession');
            $table->foreignId('course_id')->constrained('courses')->cascadeOnDelete();
            $table->string('email');
            $table->string('password');
            $table->string('image')->nullable();
            $table->string('phone_no');
            $table->string('date_of_birth')->nullable();
            $table->string('address')->nullable();
            $table->string('city')->nullable();
            $table->string('division')->nullable();
            $table->string('country')->nullable();
            $table->enum('status',['Active','Inactive','Suspend'])->default('Inactive');
            $table->enum('payment_status',['Paid','Due','Cancelled'])->default('Due');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('students');
    }
};
