<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Answer;

class AnswerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $newAnswer = Answer::create([
            'id_matricula' => 198,
            'id_classification' => 1,
            'nao_sabe' => true,
            'nao_aplica' => false 
        ]);
        $newAnswer = Answer::create([
            'id_matricula' => 198,
            'id_classification' => 2,
            'nao_sabe' => true,
            'nao_aplica' => false 
        ]); 
        $newAnswer = Answer::create([
            'id_matricula' => 198,
            'id_classification' => 3,
            'nao_sabe' => true,
            'nao_aplica' => false 
        ]);
        $newAnswer = Answer::create([
            'id_matricula' => 198,
            'id_classification' => 4,
            'nao_sabe' => true,
            'nao_aplica' => false 
        ]);
        $newAnswer = Answer::create([
            'id_matricula' => 198,
            'id_classification' => 5,
            'nao_sabe' => true,
            'nao_aplica' => false 
        ]);
        $newAnswer = Answer::create([
            'id_matricula' => 198,
            'id_classification' => 6,
            'nao_sabe' => true,
            'nao_aplica' => false 
        ]);
        $newAnswer = Answer::create([
            'id_matricula' => 198,
            'id_classification' => 7,
            'nao_sabe' => true,
            'nao_aplica' => false 
        ]);
        $newAnswer = Answer::create([
            'id_matricula' => 198,
            'id_classification' => 8,
            'nao_sabe' => true,
            'nao_aplica' => false 
        ]);
        $newAnswer = Answer::create([
            'id_matricula' => 198,
            'id_classification' => 9,
            'nao_sabe' => true,
            'nao_aplica' => false 
        ]);
    }
}
