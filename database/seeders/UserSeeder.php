<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('users')->insert([
            [
                'name' => 'Admin User',
                'email' => 'admin@admin.com',
                'password' => Hash::make('12345678'),
                'role' => 'admin',   // Role admin
                'phoneNumber' => '1234567890',  // Updated to match the migration schema
                'country' => 'Country A',
                'city' => 'City A',
                'address' => '123 Admin Street',
                'avatar' => null,
                'status' => '1', // Active
            ],
            [
                'name' => 'Regular User',
                'email' => 'user@user.com',
                'password' => Hash::make('12345678'),
                'role' => 'user',    // Role user
                'phoneNumber' => '0987654321',  // Updated to match the migration schema
                'country' => 'Country B',
                'city' => 'City B',
                'address' => '456 User Avenue',
                'avatar' => null,
                'status' => '1', // Active
            ],
        ]);
    }
}
