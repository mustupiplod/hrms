<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class IncreamentMaster extends Model
{
    protected $fillable = [
        'name',
        'code',
        'remark',
        'is_active',
    ];
}
