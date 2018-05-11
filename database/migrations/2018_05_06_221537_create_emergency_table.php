<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEmergencyTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('stu_emergency', function (Blueprint $table) {
            $table->increments('id');
            $table->string('student_number')->unique();
            $table->string('Person_name');
            $table->string('Person_phone');
            $table->string('Person_email')->unique();
            $table->string('Person_address');
            $table->string('Person_suburb');
            $table->string('Person_city');
            $table->string('Person_state');
            $table->string('Person_Country');
            
            
            
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
        Schema::drop('stu_emergency');
    }
}
