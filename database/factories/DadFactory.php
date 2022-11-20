<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class DadFactory extends Factory
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
            'nama' => $this->faker->name(),
            'tempat_lahir' => $this->faker->randomElement(['Jakarta', 'Denpassar', 'Medan', 'Surabaya']),
            'tanggal_lahir' => '1968-11-05',
            'agama' => $this->faker->randomElement(['Islam', 'Protestan', 'Katholik', 'Buddha', 'Hindu']),
            'kewarganegaraan' => 'Indonesia',
            'pekerjaan' => $this->faker->randomElement(['Dokter', 'Pedagang', 'Pegawai Swasta', 'Pegawai Negeri', 'Wiraswasta']),
            'penghasilan' => $this->faker->numberBetween(500000, 3000000),
            'alamat' => $this->faker->address(),
            'nomor_hp' => $this->faker->phoneNumber(),
            'status' => $this->faker->randomElement(['Masih Hidup', 'Telah Meninggal']),
            'created_at' => now()
        ];
    }
}
