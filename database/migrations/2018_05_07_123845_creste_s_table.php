<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CresteSTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('st', function (Blueprint $table) {
           $table->increments('id');
            $table->string('staff_id');
            $table->string('staff_fname');
            $table->string('staff_lname');
            $table->string('staff_dept');
            $table->string('staff_dob');
            $table->string('staff_email');
            $table->string('staff_gender');
            $table->string('staff_cno');
            $table->string('staff_address');
            $table->string('staff_city');
            $table->string('staff_country');
            $table->string('staff_role');
           
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
        Schema::drop('st');
    }
}
