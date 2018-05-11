<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCommTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('stu_communicaion', function (Blueprint $table) {
            $table->increments('communication_id');
            $table->string('student_number')->unique();
            $table->string('student_email')->unique();
            $table->string('student_phone');
            $table->string('student_addtess');
            $table->string('student_suburb');
            $table->string('student_city');
            $table->string('student_state');
            $table->string('student_country');
            
            
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
        Schema::drop('stu_communicaion');
    }
}
