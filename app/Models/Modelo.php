<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Modelo extends Model
{
    use HasFactory;

    protected $fillable = [
        'description',
        'value',
    ];

    public function question()
    {
        return $this->belongsToMany(Question::class);
    }
}
