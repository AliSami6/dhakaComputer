<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('applicantName');
            $table->string('fatherName');
            $table->string('fatherOccupation');
            $table->string('motherName');
            $table->string('nationalId');
            $table->string('occupation');
            $table->string('education');
            $table->string('motherOccupation');
            $table->text('presentAddress')->nullable();
            $table->text('permanentAddress')->nullable();
            $table->string('contactNumber')->unique();
            $table->string('emailAddress')->unique();
            $table->string('dob')->nullable();
            $table->string('registrationNumber');
            $table->integer('race',)->default(1);
            $table->integer('gender')->default(1);
            $table->string('image')->nullable();
            $table->integer('courseDay')->default(1);
            $table->integer('courseTime')->default(1);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users');
    }
}
