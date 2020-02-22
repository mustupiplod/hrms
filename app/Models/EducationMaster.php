<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class EducationMaster extends Model
{
    protected $fillable = [
        'school_name',
        'degree',
        'field',
        'year_complete',
        'is_active',
    ];
}
