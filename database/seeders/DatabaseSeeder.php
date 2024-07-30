<?php

namespace Database\Seeders;

use App\Models\Project;
use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        User::factory()->create([
            'name' => 'nadeesha',
            'email' => 'jayathilaka221b@gmail.com',
            'email_verified_at' => fake()->date('2024-05-03'),
            'password' => bcrypt('Nadee@123'),

        ]);

        Project::factory()->count(30)->hasTasks()->create();
    }
}
