<?php

namespace Database\Seeders;

use App\Models\State;
use Illuminate\Database\Seeder;

class StateSeeders extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        State::create([
            'name' => 'ACRE',
            'abbreviation' => 'AC',
        ]);

        State::create([
            'name' => 'ALAGOAS',
            'abbreviation' => 'AL',
        ]);

        State::create([
            'name' => 'AMAZONAS',
            'abbreviation' => 'AM',
        ]);

        State::create([
            'name' => 'BAHIA',
            'abbreviation' => 'BA',
        ]);

        State::create([
            'name' => 'CEARÁ',
            'abbreviation' => 'CE',
        ]);

        State::create([
            'name' => 'DISTRITO FEDERAL',
            'abbreviation' => 'DF',
        ]);

        State::create([
            'name' => 'ESPÍRITO SANTO',
            'abbreviation' => 'ES',
        ]);

        State::create([
            'name' => 'GOIÁS',
            'abbreviation' => 'GO',
        ]);

        State::create([
            'name' => 'MARANHÃO',
            'abbreviation' => 'MA',
        ]);

        State::create([
            'name' => 'MATO GROSSO',
            'abbreviation' => 'MT',
        ]);

        State::create([
            'name' => 'MATO GROSSO DO SUL',
            'abbreviation' => 'MS',
        ]);

        State::create([
            'name' => 'MINAS GERAIS',
            'abbreviation' => 'MG',
        ]);

        State::create([
            'name' => 'PARÁ',
            'abbreviation' => 'PA',
        ]);

        State::create([
            'name' => 'PARAÍBA',
            'abbreviation' => 'PB',
        ]);

        State::create([
            'name' => 'PARANÁ',
            'abbreviation' => 'PR',
        ]);

        State::create([
            'name' => 'PERNAMBUCO',
            'abbreviation' => 'PE',
        ]);

        State::create([
            'name' => 'PIAUÍ',
            'abbreviation' => 'PI',
        ]);

        State::create([
            'name' => 'RIO DE JANEIRO',
            'abbreviation' => 'RJ',
        ]);

        State::create([
            'name' => 'RIO GRANDE DO NORTE',
            'abbreviation' => 'RN',
        ]);

        State::create([
            'name' => 'RIO GRANDE DO SUL',
            'abbreviation' => 'RS',
        ]);

        State::create([
            'name' => 'RONDÔNIA',
            'abbreviation' => 'RO',
        ]);

        State::create([
            'name' => 'RORAIMA',
            'abbreviation' => 'RR',
        ]);

        State::create([
            'name' => 'SANTA CATARINA',
            'abbreviation' => 'SC',
        ]);

        State::create([
            'name' => 'SÃO PAULO',
            'abbreviation' => 'SP',
        ]);

        State::create([
            'name' => 'SERGIPE',
            'abbreviation' => 'SE',
        ]);

        State::create([
            'name' => 'TOCANTINS',
            'abbreviation' => 'TO',
        ]);
    }
}
