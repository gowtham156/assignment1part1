<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Eoi extends Model
{
     protected $table = 'eoi';
    protected $fillable = ['name','student_number','address','phone','email','intent','outside','program','module','semester','eligibility','do1',
    'do2','do3','do4','core','security','cvs','agreed'];

}
