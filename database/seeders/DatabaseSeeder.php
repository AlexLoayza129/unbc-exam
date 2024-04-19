<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        User::factory()->create([
            'name' => 'UNBC',
            'lastname' => 'Exam',
            'email' => 'admin@unbc.com',
            'password' => Hash::make('admin145'),
            'remember_token' => Str::random(10),
        ]);
    }
}
