<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Answer extends Model
{
    use HasFactory;

    protected $fillable = [
        'id_matricula',
        'id_classification',
        'nao_sabe', 
        'nao_aplica',        
    ];

    public function questions()
    {
        return $this->belongsToMany(Question::class, 'answers_questions', 'answer_id', 'question_id');
    }
    public function classifications()
    {
        return $this->hasOne(Classification::class, 'id', 'id_classification');
    }

}
