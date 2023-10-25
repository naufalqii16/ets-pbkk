<?php

namespace Database\Seeders;

use App\Models\Pasien;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PasienSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Pasien::create([
            'nama' => 'Budi',
            'alamat' => 'Keputih',
        ]);
        Pasien::create([
            'nama' => 'Caca',
            'alamat' => 'Gebang',
        ]);
        Pasien::create([
            'nama' => 'Sinta',
            'alamat' => 'Gubeng',
        ]);
        Pasien::create([
            'nama' => 'Luffy',
            'alamat' => 'Semolowaru',
        ]);
        Pasien::create([
            'nama' => 'Zoro',
            'alamat' => 'Mulyosari',
        ]);
        Pasien::create([
            'nama' => 'Usop',
            'alamat' => 'Kenjeran',
        ]);
        Pasien::create([
            'nama' => 'Nami',
            'alamat' => 'Pasar Turi',
        ]);
        Pasien::create([
            'nama' => 'Chopper',
            'alamat' => 'Kampung semangka',
        ]);
        Pasien::create([
            'nama' => 'Brook',
            'alamat' => 'Majapahit',
        ]);
        Pasien::create([
            'nama' => 'Sanji',
            'alamat' => 'Rungkut',
        ]);

        Pasien::create([
            'nama' => 'Vivi',
            'alamat' => 'Waru',
        ]);
    }
}
