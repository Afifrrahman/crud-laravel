<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\review>
 */
class reviewFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'nama_pelanggan' => $this->faker->name,
            'nama_produk' => $this->faker->word,
            'jenis' => $this->faker->word,
            'merek' => $this->faker->word,
            'tanggal' => $this->faker->date,
            'ulasan' => $this->faker->paragraph
        ];
    }
}
