<?php

namespace Database\Seeders;

use App\Models\Color;
use Illuminate\Database\Seeder;

class ColorSeeders extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Color::create([
            'name' => 'AZUL'
        ]);

        Color::create([
            'name' => 'AMARELO'
        ]);

        Color::create([
            'name' => 'VERDE'
        ]);

        Color::create([
            'name' => 'VERMELHO'
        ]);

        Color::create([
            'name' => 'PRETO'
        ]);

        Color::create([
            'name' => 'BRANCO'
        ]);

        Color::create([
            'name' => 'ROSA'
        ]);

        Color::create([
            'name' => 'LARANJA'
        ]);
    }
}
