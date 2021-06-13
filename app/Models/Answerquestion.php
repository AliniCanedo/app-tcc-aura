<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Answerquestion extends Model
{
    use HasFactory;

    protected $fillable = [
        'answer_id',
        'question_id',
        'nao_sabe', 
        'nao_aplica'
    ];

}
