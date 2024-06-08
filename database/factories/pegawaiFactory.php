<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\pegawai>
 */
class pegawaiFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'nama'=> $this->faker->name,
            'jabatan'=> $this->faker->jobTitle,
            'foto'=>'default.jpg',
            'tanggal_masuk'=>$this->faker->date,
            'keahlian'=>$this->faker->sentence(4),

        ];
    }
}
