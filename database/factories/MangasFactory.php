<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class MangasFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => fake()->realText(10),
            'genreid' => fake()->numberBetween(1,3),
            'userid' => fake()->numberBetween(1,10),
            'review' => fake()->numberBetween(1,5),
            'created_at' => fake()->dateTime()
        ];
    }
}
