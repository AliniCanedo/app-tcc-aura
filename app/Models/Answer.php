<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Answer extends Model
{
    use HasFactory;

    protected $fillable = [
/*         'id_question', */
/*         'registration', */
/*         'date', */
    ];

    public function question()
    {
        return $this->hasOne(Question::class, 'id', 'id_question');
    }

    public function values()
    {
        return $this->belongsToMany(Value::class, 'answers_values', 'values_id', 'answer_id');
    }
}
