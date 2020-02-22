<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Department extends Model
{
    //
    protected $fillable=[
        'name',
        'parent_depart',
        'lead',
        'remark',
        'is_active',
    ];
}
