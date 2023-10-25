<?php

namespace Database\Seeders;

use App\Models\Dokter;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DokterSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Dokter::create([
            'nama' => 'Caca',
        ]);
        Dokter::create([
            'nama' => 'Yasmin',
        ]);
        Dokter::create([
            'nama' => 'Beto',
        ]);
        Dokter::create([
            'nama' => 'Lintang',
        ]);
        Dokter::create([
            'nama' => 'Sabrina',
        ]);
        Dokter::create([
            'nama' => 'Yoseph',
        ]);
        Dokter::create([
            'nama' => 'Betrand',
        ]);
        Dokter::create([
            'nama' => 'Irfan',
        ]);
        Dokter::create([
            'nama' => 'Ani',
        ]);
    }
}
