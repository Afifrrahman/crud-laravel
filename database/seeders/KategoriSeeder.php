<?php
namespace Database\Seeders;
use Illuminate\Database\Seeder;
use App\Models\Kategori;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
class KategoriSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run():void
    {
        
        // Kategori::create(['nama_kategori' => 'Elektronik']);
        // Kategori::create(['nama_kategori' => 'Fashion']);
        // Kategori::create(['nama_kategori' => 'Makanan']);
        \App\Models\kategori::factory(10)->create();
    }
}

