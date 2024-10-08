<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class PropertyTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('property_types')->insert([

            [
                'name' => 'Commercial',
                'created_at'   => Carbon::parse('2024-09-11 21:25:07'),
                'updated_at'   => Carbon::parse('2024-09-11 21:26:53'),
            ],
            [
                'name' => 'Rent',
                'created_at'   => Carbon::parse('2024-09-11 21:25:07'),
                'updated_at'   => Carbon::parse('2024-09-11 21:26:53'),
            ]

        ]);
    }
}
