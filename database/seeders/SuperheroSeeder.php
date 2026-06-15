<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Superhero;

class SuperheroSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $heroes = [
            ['name' => 'Clark Kent', 'superhero_name' => 'Superman', 'superpower' => 'Super força, voar, visão de raio-x', 'weakness' => 'Kryptonita'],
            ['name' => 'Bruce Wayne', 'superhero_name' => 'Batman', 'superpower' => 'Intelecto genial, artes marciais, dinheiro', 'weakness' => 'Trauma de infância'],
            ['name' => 'Diana Prince', 'superhero_name' => 'Wonder Woman', 'superpower' => 'Super força, imortalidade, laço da verdade', 'weakness' => 'Nenhuma óbvia'],
            ['name' => 'Barry Allen', 'superhero_name' => 'The Flash', 'superpower' => 'Super velocidade', 'weakness' => 'Fome extrema (metabolismo acelerado)'],
            ['name' => 'Peter Parker', 'superhero_name' => 'Spider-Man', 'superpower' => 'Sentido aranha, escalar paredes, agilidade', 'weakness' => 'Contas para pagar']
        ];

        foreach ($heroes as $hero) {
            Superhero::create($hero);
        }

    }
}
