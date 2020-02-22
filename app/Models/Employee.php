<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    protected  $fillable = [
        'name',
        'mname',
        'lname',
        'gender',
        'dob',
        'email',
        'mobile',
        'marital_status',
        'location',
        'address',
        'education',
        'year_complete',
        'parent_department',
        'department',
        'department_lead',
        'designation',
    ];
}
