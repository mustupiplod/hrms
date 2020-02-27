<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    protected  $fillable = [
        'f_name',
        'm_name',
        'l_name',
        'gender',
        'dob',
        'email_id',
        'mobile',
        'marital_status',
        'location',
        'address',
        'education',
        'degree',
        'year_complete',
        'parent_department',
        'department',
        'department_lead',
        'designation',
    ];
}
