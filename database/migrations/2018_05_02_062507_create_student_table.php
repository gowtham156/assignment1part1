<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateStudentTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('students', function (Blueprint $table) {
           $table->increments('student_id');
           $table->string('student_number')->unique();
            $table->string('student_fname');
            $table->string('student_lname');
            $table->string('student_sname');
            $table->string('dob');
            $table->string('gender');
            $table->string('ethnicity');
            $table->string('email',100)->unique();
            $table->string('photo',500);
            $table->string('password',100);
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
        Schema::drop('students');
    }
}
