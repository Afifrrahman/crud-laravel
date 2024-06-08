<?php
namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Pesanan;

class PesananFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Pesanan::class;

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
            'harga' => $this->faker->randomNumber(5),
            'total' => $this->faker->randomDigitNotNull,
            'tgl_pesanan' => $this->faker->date(),
            'alamat' => $this->faker->address(),
            'merek' => $this->faker->word, // Menggunakan faker untuk menghasilkan merek secara acak
        ];
    }
}
