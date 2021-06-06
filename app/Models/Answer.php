<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Answer extends Model
{
    use HasFactory;

    protected $fillable = [
        'id_matricula', 
        'nao_sabe', 
        'nao_aplica'
    ];

    public function questions()
    {
        return $this->belongsToMany(Question::class, 'answers_questions', 'answer_id', 'question_id');
    }
}
