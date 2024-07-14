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
        Schema::create('instructors', function (Blueprint $table) {
            $table->id();
            $table->string('first_name');
            $table->string('last_name')->nullable();
            $table->string('email');
            $table->string('phone');
            $table->string('image')->nullable();
            $table->text('address_one')->nullable();
            $table->text('address_two')->nullable();
            $table->string('state')->nullable();
            $table->string('country')->nullable();
            $table->string('nationality')->nullable();
            $table->longText('about')->nullable();
            $table->enum('status',['Active','Inactive','Pending','Suspend'])->default('Active');
            $table->string('job_title')->nullable();
            $table->string('skill_level')->nullable();
            $table->string('language')->nullable();
            $table->string('dob')->nullable();
            $table->string('join_date')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('instructors');
    }
};