<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class StudentCom extends Model
{
     protected $table = 'stu_communicaion';
    protected $fillable = ['student_number','student_email','student_phone','student_ddtess','student_suburb','student_city','student_state','student_country'];

}
