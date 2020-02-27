<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class EmpIncreament extends Model
{
    protected $fillable = [
        'employee_name',
        'increament_date',
        'current_designation',
        'increament_type',
        'remark',
        'is_active',
    ];
}
