<?php

namespace Database\Seeders;

use App\Models\Driver;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DriverSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Driver::create([
            'first_name' => 'cesar',
            'second_name' => 'augusto',
            'last_name' => 'diaz bermudez',
            'document' => 1070458878,
            'phone' => 3132648798,
            'direction' => 'cra 5 # 10-14',
            'type_doc_id' => 1,
            'city_id' => 3,
        ]);

        Driver::create([
            'first_name' => 'jorge',
            'second_name' => 'eduardo',
            'last_name' => 'gonzalez hernandez',
            'document' => 1070357951,
            'phone' => 3115416598,
            'direction' => 'cra 2 # 1-10',
            'type_doc_id' => 2,
            'city_id' => 1,
        ]);

        Driver::create([
            'first_name' => 'camilo',
            'second_name' => 'andres',
            'last_name' => 'gonzalez rodriguez',
            'document' => 1070482101,
            'phone' => 3105654848,
            'direction' => 'cra 7 # 11-18',
            'type_doc_id' => 2,
            'city_id' => 1,
        ]);

        Driver::create([
            'first_name' => 'luisa',
            'second_name' => 'fernanda',
            'last_name' => 'ortiz',
            'document' => 11084745454,
            'phone' => 3132021514,
            'direction' => 'cra 11 bis # 10-13',
            'type_doc_id' => 3,
            'city_id' => 2,
        ]);


    }
}
