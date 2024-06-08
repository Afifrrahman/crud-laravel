<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class produkSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // \App\Models\produk::create([
        //     'nama_produk'=>'handphone',
        //     'merek'=>'samsung',
        //     'harga'=>'0000.00',
        //     'total'=>'2'
        // ]);
        \App\Models\produk::factory(10)->create();
    }
}
