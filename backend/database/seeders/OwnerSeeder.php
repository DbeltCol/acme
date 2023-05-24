<?php

namespace Database\Seeders;

use App\Models\Owner;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class OwnerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Owner::create([
            'first_name' => 'alcira',
            'last_name' => 'hernandez',
            'document' => 52101454,
            'phone' => 3112841414,
            'direction' => 'call 4 # 11-11',
            'type_doc_id' => 3,
            'city_id' => 3,
        ]);

        Owner::create([
            'first_name' => 'juan',
            'last_name' => 'fernando',
            'last_name' => 'diaz',
            'document' => 51101121,
            'phone' => 3114141212,
            'direction' => 'cra 5 # 11-14',
            'type_doc_id' => 1,
            'city_id' => 3,
        ]);

        Owner::create([
            'first_name' => 'hernan',
            'last_name' => 'camilo',
            'last_name' => 'rodriguez lopez',
            'document' => 659877878,
            'phone' => 3101121313,
            'direction' => 'cra 8 # 10-14',
            'type_doc_id' => 1,
            'city_id' => 1,
        ]);

        Owner::create([
            'first_name' => 'sonia',
            'last_name' => 'amparo',
            'last_name' => 'gonzalez pachon',
            'document' => 32654987,
            'phone' => 3165489595,
            'direction' => 'mz 10 casa 5',
            'type_doc_id' => 2,
            'city_id' => 2,
        ]);
    }
}
