<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

<<<<<<< HEAD
=======

>>>>>>> eb939a3 (8 octobar 2024)
class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
<<<<<<< HEAD
=======

        $this->call(AminitiesSeeder::class);
        $this->call(CategorySeeder::class);
        $this->call(PropertyTypeSeeder::class);
        $this->call(UserSeeder::class);

>>>>>>> eb939a3 (8 octobar 2024)
    }
}
