<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    //
    protected $fillable = [
        'course_name',
        'questionnaire',
        'pass_criteria',
        'trainer',
        'start_date',
        'end_date',
        'assign_to',
        'is_active',
    ];
}
