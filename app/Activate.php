<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Activate extends Model
{
       protected $table = 'activate';
    protected $fillable = ['student_number','status','today'];
}
