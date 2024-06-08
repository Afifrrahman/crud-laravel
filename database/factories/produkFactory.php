<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Produk>
 */
class produkFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'nama_produk' => $this->faker->word,
            'merek' => $this->faker->company,
            'harga' => $this->faker->randomNumber(5),
            'jenis'=> $this->faker->word,
            'total' => $this->faker->randomDigitNotNull,

        ];
    }
}
