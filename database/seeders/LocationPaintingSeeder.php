<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class LocationPaintingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('location_painting')->insert([
            [
                'location_id' => 1,
                'painting_id' => 6,
            ],
            [
                'location_id' => 2,
                'painting_id' => 3,
            ],
            [
                'location_id' => 1,
                'painting_id' => 1,
            ],
            [
                'location_id' => 4,
                'painting_id' => 2,
            ],
            [
                'location_id' => 1,
                'painting_id' => 4,
            ],
            [
                'location_id' => 4,
                'painting_id' => 5,
            ],
        ]);
    }
}