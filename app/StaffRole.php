<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class StaffRole extends Model
{
    protected $table = 'staffroles';
    protected $fillable = ['rolename','role_description'];
}
