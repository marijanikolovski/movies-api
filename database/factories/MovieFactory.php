<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class MovieFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'title' =>  $this->faker->text($maxNbChars = 20),
            'director' =>  $this->faker->text($maxNbChars = 20),
            'imageUrl' =>  $this->faker->text($maxNbChars = 20),
            'duration' => $this->faker->numberBetween(0, 400),
            'releaseDate' => $this->faker->date(),
            'genre' =>  $this->faker->text($maxNbChars = 20),
        ];
    }
}
