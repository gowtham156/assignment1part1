<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class StudentEmergency extends Model
{
       protected $table = 'stu_emergency';
    protected $fillable = ['student_number','person_name','person_phone','person_address','person_suburb','person_city','person_state','person_country'];

}
