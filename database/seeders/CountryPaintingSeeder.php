<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class CountryPaintingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('country_painting')->insert([
            [
                'country_id' => 1,
                'painting_id' => 6,
            ],
            [
                'country_id' => 2,
                'painting_id' => 3,
            ],
            [
                'country_id' => 1,
                'painting_id' => 1,
            ],
            [
                'country_id' => 4,
                'painting_id' => 2,
            ],
            [
                'country_id' => 1,
                'painting_id' => 4,
            ],
            [
                'country_id' => 4,
                'painting_id' => 5,
            ],
        ]);
    }
}