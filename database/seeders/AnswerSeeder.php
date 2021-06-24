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
            'nao_sabe' => 1,
            'nao_aplica' => 1
        ]);
        $newAnswer = Answer::create([
            'id_matricula' => 198,
            'id_classification' => 2,
            'nao_sabe' => 2,
            'nao_aplica' => 2
        ]); 
        $newAnswer = Answer::create([
            'id_matricula' => 198,
            'id_classification' => 3,
            'nao_sabe' => 3,
            'nao_aplica' => 3
        ]);
        $newAnswer = Answer::create([
            'id_matricula' => 198,
            'id_classification' => 4,
            'nao_sabe' => 4,
            'nao_aplica' => 4
        ]);
        $newAnswer = Answer::create([
            'id_matricula' => 198,
            'id_classification' => 5,
            'nao_sabe' => 5,
            'nao_aplica' => 5
        ]);
        $newAnswer = Answer::create([
            'id_matricula' => 198,
            'id_classification' => 6,
            'nao_sabe' => 6,
            'nao_aplica' => 6
        ]);
        $newAnswer = Answer::create([
            'id_matricula' => 198,
            'id_classification' => 7,
            'nao_sabe' => 7,
            'nao_aplica' => 7
        ]);
        $newAnswer = Answer::create([
            'id_matricula' => 198,
            'id_classification' => 8,
            'nao_sabe' => 8,
            'nao_aplica' => 8
        ]);
        $newAnswer = Answer::create([
            'id_matricula' => 198,
            'id_classification' => 9,
            'nao_sabe' => 9,
            'nao_aplica' => 9
        ]);
    }
}
