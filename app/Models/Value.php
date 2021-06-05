<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Value extends Model
{
    use HasFactory;

    protected $fillable = [
        /* 'value' */
    ];

    public function answer()
    {
        return $this->belongsToMany(Answer::class, 'answers_values', 'answer_id', 'values_id');
    }
}