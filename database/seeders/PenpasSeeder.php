<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PenpasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('penpas')->insert([
            'nama' => 'Reni Anggraeni',
            'alamat' => 'Desa Benteng Gantarang',
            'politujuan' => 'Poli Umum',
            'tanggal' => '2023-09-04',
        ]);
    }
}
