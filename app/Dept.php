<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Dept extends Model
{
       protected $table = 'department';
    protected $fillable = ['dept_number','dept_name'];

}
