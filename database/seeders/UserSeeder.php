<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::create([
            "name" => "Alam Santiko Wibowo",
            "email" => "alamhafidz61@gmail.com",
            "email_verified_at" => now(),
            "password" => Hash::make("akunku61")
        ])->assignRole('user');

        User::create([
            "name" => "Admin Jamkrindo",
            "email" => "developer2.jamkrindo@gmail.com",
            "email_verified_at" => now(),
            "password" => Hash::make("akunku61")
        ])->assignRole('admin');
    }
}
