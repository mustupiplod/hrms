<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ReasonMaster extends Model
{
    //
    protected $fillable = [
        'reason_id',
        'reason_type',
        'reason_content',
        'is_active'
    ];
}
