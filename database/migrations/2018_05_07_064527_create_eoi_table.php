<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEoiTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('eoi', function (Blueprint $table) {
            $table->increments('eoi_id');
            $table->string('name',100);
            $table->string('student_number',100);
            $table->string('address',1000);
            $table->string('phone',100);
            $table->string('email',1000);
            $table->string('intent',1000);
            $table->string('outside',1000);
            $table->string('program',1000);
            $table->string('module',1000);
            $table->string('semester',1000);
            $table->string('eligibility',1000);
            
            $table->string('do1',1000);
            $table->string('do2',1000);
            $table->string('do3',1000);
            $table->string('do4',1000);
            $table->string('core',1000);
            $table->string('security',1000);
            $table->string('cvs',1000);
            $table->string('agreed',100);
            
            
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
        Schema::drop('eoi');
    }
}
