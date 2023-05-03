<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Water>
 */
class WaterFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'date'=> fake()->date($format = 'Y-m-d', $min = 'now'),
            'value'=> fake()->numberBetween($min = 10, $max = 2300)
        ];
    }
}
