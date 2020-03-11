<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class City extends Model
{
    //
    protected $fillable = [
        'country_id',
        'state_id',
        'city_name',
        'is_active',
    ];
}
