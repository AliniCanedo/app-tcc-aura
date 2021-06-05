<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Value;

class ValueSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        foreach (range(1,6) as $index) {
            $newValue = Value::create([
                'value' => $index,
            ]);
        }
    }
}
