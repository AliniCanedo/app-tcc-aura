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
        'description',
    ];

    public function classification()
    {
        return $this->hasOne(Classification::class, 'id', 'id_classification');
    }

    public function modelo()
    {
        return $this->hasOne(Modelo::class, 'id', 'id_modelo');
    }
}
