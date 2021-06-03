<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Modelo;

class ModeloSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $newModelo = Modelo::create([
            'description' => 'Múltipla Escolha',
            'value' => '6'
        ]);

        $newModelo = Modelo::create([
            'description' => 'NPS',
            'value' => '10'
        ]);
    }
}
