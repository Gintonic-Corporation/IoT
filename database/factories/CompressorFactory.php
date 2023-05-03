<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Fact;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Compressor>
 */
class CompressorFactory extends Factory
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
            'factoryID'=> Fact::inRandomOrder()->first()->id
        ];
    }
}
