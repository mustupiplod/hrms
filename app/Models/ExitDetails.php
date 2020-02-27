<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ExitDetails extends Model
{
    //
    protected $fillable = [
        'employee_name',
        'separation_date',
        'interviewer',
        'reason'
    ];
}
