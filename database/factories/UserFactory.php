<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class UserFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'nama_lengkap' => $this->faker->name(),
            'nisn' => $this->faker->unique()->randomNumber(5, true),
            'nis' => $this->faker->unique()->randomNumber(3, true),
            'status' => 'siswa',
            'email' => $this->faker->email(),
            'password' => Hash::make('siswa123'),
            'jenis_kelamin' => $this->faker->randomElement(['L', 'P']),
            'year_id' => 1,
            'group_id' => 1,
            'created_at' => now(),
        ];
    }

    /**
     * Indicate that the model's email address should be unverified.
     *
     * @return \Illuminate\Database\Eloquent\Factories\Factory
     */
    public function unverified()
    {
        return $this->state(function (array $attributes) {
            return [
                'email_verified_at' => null,
            ];
        });
    }
}
