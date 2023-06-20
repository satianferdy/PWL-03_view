<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Mahasiswa_MataKuliah>
 */
class Mahasiswa_MataKuliahFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'mahasiswa_id' => $this->faker->unique()->numberBetween(1, 10),
            'matakuliah_id' => $this->faker->unique()->numberBetween(1, 4),
            'nilai' => $this->faker->randomElement(['A', 'B', 'C', 'D', 'E']),
        ];
    }
}
