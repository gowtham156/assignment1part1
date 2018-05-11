<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Proposal extends Model
{
       protected $table = 'proposal';
    protected $fillable = ['student_number','proposal'];
}
