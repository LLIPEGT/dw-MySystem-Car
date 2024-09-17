<?php

namespace Database\Seeders;

use App\Models\Mold;
use Illuminate\Database\Seeder;

class MoldSeeders extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Mold::create([
            'name' => 'CIVIC',
            'brand_id' => 5
        ]);
    }
}
