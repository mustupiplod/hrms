<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class AnswerMaster extends Model
{
    //
    protected $fillable = [
        'question_master_id',
        'question',
        'answer'
    ];
}
