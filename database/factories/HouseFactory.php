<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\House>
 */
class HouseFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'house' => $this->faker->randomElement(['Gryffindor', 'Hufflepuff', 'Ravenclaw', 'Slytherin']),
            'emoji' => $this->faker->randomElement(['🦁', '🦡', '🦅', '🐍']),
            'founder' => $this->faker->name,
            'colors' => ['color1' => 'red', 'color2' => 'gold'],
            'animal' => $this->faker->word,
        ];
    }
}
