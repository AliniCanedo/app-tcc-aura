<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Classification;

class ClassificationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $newClassification = Classification::create([
            'description' => 'Disciplinas '
        ]);
        $newClassification2 = Classification::create([
            'description' => 'Metodologia de Ensino (Aura)'
           ]);
        $newClassification3 = Classification::create([
            'description' => 'Curso ADS'
        ]);
        $newClassification4 = Classification::create([
            'description' => 'Professores'
        ]);
        $newClassification5 = Classification::create([
            'description' => 'Coordenação do Curso '
        ]);
        $newClassification6 = Classification::create([
            'description' => 'Cursos e Atividades de Extensão'
        ]);
        $newClassification7 = Classification::create([
            'description' => 'Intercâmbio'
        ]);
        $newClassification8 = Classification::create([
            'description' => 'Estágio, TCC e Projeto  Integrador'
        ]);
        $newClassification9 = Classification::create([
            'description' => 'Infraestrutura'
        ]);
           
    }
}
