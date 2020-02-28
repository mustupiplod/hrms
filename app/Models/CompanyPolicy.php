<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CompanyPolicy extends Model
{
    //
    protected $fillable = [
        'policy_title',
        'description',
        'employees[]',
    ];
}
