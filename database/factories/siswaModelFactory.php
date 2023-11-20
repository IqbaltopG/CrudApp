<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\siswaModel>
 */
class siswaModelFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'NIK' => fake()->randomNumber(8,true),
            'nama' => fake()->firstName(),
            'alamat' => fake()->street(),
            'kelurahan' =>fake()->word(),
            'kecamatan' => fake()->word(),
            'provinsi' => fake()->state(),
            'kota' => fake()->city(),
            'dob' => fake()->date()

        ];
    }
}
