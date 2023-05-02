<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Air_extractor;
use App\Models\Fact;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Producer>
 */
class ProducerFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name'=> fake()->word(),
            'extractorID'=> Air_extractor::inRandomOrder()->first()->id,
            'factoryID'=> Fact::inRandomOrder()->first()->id
        ];
    }
}
