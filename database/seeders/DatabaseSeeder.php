<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // Uncomment the line below if you want to seed additional test users via factory
        // User::factory(10)->create();

        // Call the UserSeeder to seed random users
        $this->call(UserSeeder::class);

        // Call the ActivitySeeder to seed activities
        $this->call(ActivitySeeder::class);
        
    }
}
