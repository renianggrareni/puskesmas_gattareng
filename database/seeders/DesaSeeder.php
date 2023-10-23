<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Models\Desa;

class DesaSeeder extends Seeder
{
    public function run()
    {
        $desa = [
            ['nama' => 'Desa Benteng Gantarang'],
            ['nama' => 'Desa Benteng Malewang'],
            ['nama' => 'Desa Bonto Macinna'],
            ['nama' => 'Desa Bonto Masila'],
            ['nama' => 'Desa Bonto Raja'],
            ['nama' => 'Desa Gattareng'],
            ['nama' => 'Desa Padang'],
        ];

        Desa::insert($desa);
    }
}
