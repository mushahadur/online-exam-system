<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ExamOne extends Model
{
    use HasFactory;
    protected $fillable = [
        'question',
        'ans_one',
        'ans_two',
        'ans_three',
        'correct_ans',
        'question_mark',
    ];
}
