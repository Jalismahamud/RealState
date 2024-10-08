<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class AminitiesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('aminities')->insert([
            [
                'name' => 'Wifi',
                'created_at'   => Carbon::parse('2024-09-11 21:25:07'),
                'updated_at'   => Carbon::parse('2024-09-11 21:26:53'),
            ],
            [
                'name' => 'Parking',
                'created_at'   => Carbon::parse('2024-09-11 21:25:07'),
                'updated_at'   => Carbon::parse('2024-09-11 21:26:53'),
            ],
            [
                'name' => 'Swimming Pool',
                'created_at'   => Carbon::parse('2024-09-11 21:25:07'),
                'updated_at'   => Carbon::parse('2024-09-11 21:26:53'),
            ],
            [
                'name' => 'Gym',
                'created_at'   => Carbon::parse('2024-09-11 21:25:07'),
                'updated_at'   => Carbon::parse('2024-09-11 21:26:53'),
            ],
            [
                'name' => 'Spa',
                'created_at'   => Carbon::parse('2024-09-11 21:25:07'),
                'updated_at'   => Carbon::parse('2024-09-11 21:26:53'),
            ],
            [
                'name' => 'Cafeteria',
                'created_at'   => Carbon::parse('2024-09-11 21:25:07'),
                'updated_at'   => Carbon::parse('2024-09-11 21:26:53'),
            ],
            [
                'name' => 'Laundry',
                'created_at'   => Carbon::parse('2024-09-11 21:25:07'),
                'updated_at'   => Carbon::parse('2024-09-11 21:26:53'),
            ],

        ]);
    }
}
