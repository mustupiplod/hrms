<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Scale extends Model
{
    protected $fillable = [
        'name',
        'currency',
        'compensation_value',
        'emp_name',
        'is_active',
    ];
}
