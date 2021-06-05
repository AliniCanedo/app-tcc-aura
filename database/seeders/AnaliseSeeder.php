<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Analisebusca;

class AnaliseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    
        $newAnalise = Analisebusca::create([
            'dados' => json_encode([
            'asijdiao' => 'asdiaosdho',
            'aa' => 'aa',
            'asaaijdiao' => 'aa'])
        ]);
    }
}
