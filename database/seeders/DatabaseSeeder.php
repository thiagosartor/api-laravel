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
        // \App\Models\User::factory(10)->create();
        \App\Models\employee::create([
            "name" => 'Thiago Ribeiro de Bona Sartor',
            "cpf" => '076.588.799-16',
            "phone" => '(49) 999929780',
        ]);

    }
}
