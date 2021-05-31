<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Question extends Model
{
    use HasFactory;
    
    protected $fillable = [
        'id_classification',
        'id_modelo',
        'descripiton',
    ];

    public function classification()
    {
        return $this->hasOne(Classification::class);
    }

    public function modelo()
    {
        return $this->hasOne(Classification::class);
    }
}
