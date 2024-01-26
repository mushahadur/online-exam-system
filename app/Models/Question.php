<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Question extends Model
{
    use HasFactory;
    protected $fillable = [
        'exam_id', 
        'name', 
        'ans_one', 
        'ans_two', 
        'ans_three', 
        'ans_four', 
        'correct_ans', 
        'question_mark'
    ];
}
