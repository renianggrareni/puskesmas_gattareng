<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\ListDesa;

class ListDesaSeeder extends Seeder
{
        public function run()
    {
        // Menambahkan data dummy 7 desa
        ListDesa::create(['nama' => 'Desa Benteng Gantang', 'jumlah_penduduk' => 1000]);
        ListDesa::create(['nama' => 'Desa Benteng Malewang', 'jumlah_penduduk' => 1500]);
        ListDesa::create(['nama' => 'Desa Bonto Macinna', 'jumlah_penduduk' => 800]);
        ListDesa::create(['nama' => 'Desa Bonto Masila', 'jumlah_penduduk' => 1200]);
        ListDesa::create(['nama' => 'Desa Bonto Raja', 'jumlah_penduduk' => 2000]);
        ListDesa::create(['nama' => 'Desa Gattareng', 'jumlah_penduduk' => 700]);
        ListDesa::create(['nama' => 'Desa Padang', 'jumlah_penduduk' => 900]);
    }
}
