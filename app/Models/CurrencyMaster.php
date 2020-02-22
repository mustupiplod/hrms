<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CurrencyMaster extends Model
{
    protected $fillable = [
        'name',
        'code',
        'value',
        'is_active',
        ];
}
