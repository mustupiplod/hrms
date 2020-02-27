<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Scale extends Model
{
    protected $fillable = [
        'scale_name',
        'currency',
        'compensation_value',
        'employee_name',
        'is_active',
    ];
}
