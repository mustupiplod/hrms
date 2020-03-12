<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class LeaveRequest extends Model
{
    //
    protected $fillable = [
        'employee_name',
        'leave_type',
        'from_date',
        'end_date',
        'total_days',
        'remark',
        'is_active',
    ];
}
