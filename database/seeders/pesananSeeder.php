<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class pesananSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // \App\Models\pesanan::create([
        //     'nama_pelanggan'=>'john wee',
        //     'nama_produk'=>'sepatu',
        //     'harga'=> 10000.00,
        //     'merek'=> 'hallo',
        //     'total'=>2,
        //     'tgl_pesanan'=> '2023-07-08',
        //     'alamat' => 'Jalan padang',
        //     'nama_produk' => \App\Models\produk::pluck('nama_produk')->random(),
        // ]);
        \App\Models\pesanan::factory(10)->create();
        
    }
}
