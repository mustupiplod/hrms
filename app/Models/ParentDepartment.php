<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ParentDepartment extends Model
{
    //
    protected $fillable =[
        'parent_depart_name',
        'is_active',
    ];
}
