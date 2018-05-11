<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CresteEoiTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('eoi2', function (Blueprint $table) {
            $table->increments('id');
            $table->string('student_number');
            $table->string('sname')->nullable;
            $table->string('no')->nullable;
            $table->string('cvs');
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
        Schema::drop('eoi2');
    }
}
