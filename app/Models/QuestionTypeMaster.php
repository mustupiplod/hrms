<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class QuestionTypeMaster extends Model
{
    //
    protected $fillable = [
        'question_type',
        'is_active'
    ];
}
