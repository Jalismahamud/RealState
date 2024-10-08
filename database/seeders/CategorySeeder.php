<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\DB;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('categories')->insert([
            [
                'name' => 'House',
                'created_at'   => Carbon::parse('2024-09-11 21:25:07'),
                'updated_at'   => Carbon::parse('2024-09-11 21:26:53'),
            ],
            [
                'name' => 'Apartment',
                'created_at'   => Carbon::parse('2024-09-11 21:25:07'),
                'updated_at'   => Carbon::parse('2024-09-11 21:26:53'),
            ],
            [
                'name' => 'Villa',
                'created_at'   => Carbon::parse('2024-09-11 21:25:07'),
                'updated_at'   => Carbon::parse('2024-09-11 21:26:53'),
            ],
            [
                'name' => 'Office',
                'created_at'   => Carbon::parse('2024-09-11 21:25:07'),
                'updated_at'   => Carbon::parse('2024-09-11 21:26:53'),
            ]
        ]);
    }
}
