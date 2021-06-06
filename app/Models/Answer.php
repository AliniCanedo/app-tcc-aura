<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Answer extends Model
{
    use HasFactory;

    protected $fillable = [
    'id_question',
    'id_matricula', 
    'value_answer'
    ];

    public function question()
    {
        return $this->hasOne(Question::class, 'id', 'id_question');
    }
}
