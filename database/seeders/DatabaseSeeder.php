<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(UserSeeder::class);
        $this->call(ClassificationSeeder::class);
        $this->call(ModeloSeeder::class);
        $this->call(QuestionSeeder::class);
        /* $this->call(AnaliseSeeder::class); */
    }
}
