<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Shifts extends Model
{
    // here is the fillable variable t insert data
    protected $fillable = [
        'shift_name',
        'type',
        'start_time',
        'end_time',
        'total_time',
        'is_active',
    ];

}
