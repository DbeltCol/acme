<?php

namespace Database\Seeders;

use App\Models\City;
use App\Models\TypeDoc;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ParametricSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        /**
         *
         * cities
         *
        */

        City::create([
            'code' => '05001',
            'title' => 'Medellín',
        ]);

        City::create([
            'code' => '73001',
            'title' => 'Ibagué',
        ]);

        City::create([
            'code' => '11001',
            'title' => 'Bogotá DC',
        ]);


        /**
         *
         * type docs
         *
        */

        TypeDoc::create([
            'code' => 'CC',
            'title' => 'Cédula de ciudadania',
        ]);

        TypeDoc::create([
            'code' => 'CE',
            'title' => 'Cédula de extranjería',
        ]);

        TypeDoc::create([
            'code' => 'PAS',
            'title' => 'Pasaporte',
        ]);
    }
}
