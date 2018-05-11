<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Register extends Model
{
    protected $table = 'students';
    protected $fillable = ['student_number','student_fname','student_lname','student_sname','dob','gender','ethnicity','email','photo','password'];
}
