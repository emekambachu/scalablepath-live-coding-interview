<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class ProductFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name' => $this->faker->name(),
            'image' => 'https://via.placeholder.com/450/FF7E0D/FFF?text=MyProduct',
            'description' => $this->faker->text($maxNbChars = 150),
            'price' => $this->faker->randomDigit(),
        ];
    }
}
