<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class LeaveTypes extends Model
{
    //
    protected $fillable = [
        'leave_name',
        'leave_days',
        'is_active'
    ];
}
