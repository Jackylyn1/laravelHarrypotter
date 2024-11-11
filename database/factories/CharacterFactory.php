<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Character>
 */
class CharacterFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'fullName' => $this->faker->name,
            'nickname' => $this->faker->word,
            'hogwartsHouse' => $this->faker->randomElement(['Gryffindor', 'Hufflepuff', 'Ravenclaw', 'Slytherin']),
            'interpretedBy' => $this->faker->name,
            'children' => $this->faker->words(3),
            'image' => $this->faker->imageUrl,
            'birthdate' => $this->faker->date,
            'house_id' => 1
        ];
    }
}
