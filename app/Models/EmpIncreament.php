<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class EmpIncreament extends Model
{
    protected $fillable = [
        'emp_name',
        'increament_date',
        'current_designation',
        'increament_type',
        'remark',
        'is_active',
    ];
}
