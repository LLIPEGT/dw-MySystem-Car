<?php

namespace Database\Seeders;

use App\Models\Brand;
use Illuminate\Database\Seeder;

class BrandSeeders extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Brand::create([
            'name' => 'FIAT',
        ]);

        Brand::create([
            'name' => 'FORD',
        ]);

        Brand::create([
            'name' => 'CHEVROLET',
        ]);

        Brand::create([
            'name' => 'TOYOTA',
        ]);

        Brand::create([
            'name' => 'HONDA',
        ]);

        Brand::create([
            'name' => 'BMW',
        ]);

        Brand::create([
            'name' => 'MERCEDES-BENZ',
        ]);

        Brand::create([
            'name' => 'AUDI',
        ]);
    }
}
