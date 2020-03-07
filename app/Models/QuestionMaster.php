<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class QuestionMaster extends Model
{
    //
    protected $fillable = [
        'topic',
        'question_name',
        'department_id',
        'answer_master_id',
        'valid_answer',
        'is_active'
    ];
}
