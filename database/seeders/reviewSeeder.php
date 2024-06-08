<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class reviewSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //     \App\Models\review::create([
        //     'nama_pelanggan'=>'joni',
        //     'nama_produk'=> 'samsung',
        //     'jenis'=>'elektronik',
        //     'merek'=>'samsung',
        //     'tanggal'=>'12-08-2023',
        //     'ulasan'=>'ulasan A'
        // ]);
        \App\Models\review::factory(10)->create();
    }
}
