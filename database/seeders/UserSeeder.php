<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // User::factory(20)->create();
        User::create([
            'name' => 'Budi',
            'email' => 'budidi@gmail.com',
            'email_verified_at' => now(),
            'password' => '12345678'
        ]);
    }
}
