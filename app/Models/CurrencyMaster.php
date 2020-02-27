<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CurrencyMaster extends Model
{
    protected $fillable = [
        'currency_name',
        'code',
        'value',
        'is_active',
        ];
}
