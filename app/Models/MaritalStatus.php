<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class MaritalStatus extends Model
{
    //
    protected $fillable = [
        'marital_name',
        'is_active'
    ];
}
