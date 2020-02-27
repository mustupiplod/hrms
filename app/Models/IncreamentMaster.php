<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class IncreamentMaster extends Model
{
    protected $fillable = [
        'increament_name',
        'increament_code',
        'remark',
        'is_active',
    ];
}
