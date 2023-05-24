<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Vehicle>
 */
class VehicleFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {

        $brands = ['bmw','mazda','chevrolet','hiunday','renault','mercedes benz'];
        $colors = ['rojo','balco','gris','negro'];
        $types = ['particular','público'];

        return [
            'license_plate' => $this->faker->unique()->bothify('#######'),
            'brand' => $brands[random_int(0,5)],
            'color' => $colors[random_int(0,3)],
            'type' => $types[random_int(0,1)],
            'driver_id' => random_int(1,3),
            'owner_id' => random_int(1,3),

        ];
    }
}
