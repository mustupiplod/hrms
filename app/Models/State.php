<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class State extends Model
{
    //
    protected $fillable = [
        'country_id',
        'state_name',
        'is_active',
    ];
}
