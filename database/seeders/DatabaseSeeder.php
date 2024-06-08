<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        // \App\Models\produk::factory(10)->create();
        \App\Models\User::factory(10)->create();
        $this->call(produkseeder::class);
        $this->call(pesananseeder::class);
        $this->call(reviewseeder::class);
        $this->call(pegawaiSeeder::class);
        $this->call(KategoriSeeder::class);

        \App\Models\Kategori::create([
            'nama_kategori'=>'Elektronik',
        ]);

        \App\Models\Kategori::create([
            'nama_kategori'=>'Fashion',
        ]);
        \App\Models\Kategori::create([
            'nama_kategori'=> 'Makanan',
        ]);


    }
}
