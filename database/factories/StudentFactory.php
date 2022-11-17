<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class StudentFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'uri' => Str::random(50),
            'alamat' => $this->faker->streetName(),
            'kota' => $this->faker->city(),
        ];
    }
}
