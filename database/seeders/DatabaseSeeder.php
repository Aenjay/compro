<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        User::factory()->create([
            'name'     => 'Super Admin',
            'email'    => 'superadmin@gmail.com',
            'role'     => 'Super Admin',
            'password' => Hash::make("123123"),
        ]);
        User::factory()->create([
            'name'     => 'Admin',
            'email'    => 'admin@gmail.com',
            'role'     => 'Role',
            'password' => Hash::make("123123"),
        ]);
    }
}
