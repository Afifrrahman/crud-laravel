<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class pegawaiSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // \App\Models\Pegawai::create([
        //     'nama'=>'ahii',
        //     'jabatan'=> 'manajer',
        //     'foto'=>'jhon.jpg',
        //     'tanggal_masuk'=>'2023-01-01',
        //     'keahlian'=>'desain'
        // ]);
        \App\Models\pegawai::factory(10)->create();
    }
}
