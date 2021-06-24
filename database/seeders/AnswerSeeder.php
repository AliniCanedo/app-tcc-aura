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
    }
}
