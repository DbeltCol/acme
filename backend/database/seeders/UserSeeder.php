<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        /**
         *
         * create admin user
         *
        */

        User::create([
            'name' => 'Administrador Acme',
            'email' => 'admin@acme.co',
            'password' => bcrypt('Acme2023'),
        ]);
    }
}
