<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Staffs extends Model
{
    protected $table = 'staffs';
    protected $fillable = ['staff_id','staff_fname','staff_lname','staff_dept','staff_dob','staff_email','staff_gender','staff_cno','staff_address','staff_city','staff_country','staff_role'];
}
