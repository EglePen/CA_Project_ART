<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class MovementPaintingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('movement_painting')->insert([
            [
                'movement_id' => 1,
                'painting_id' => 6,
            ],
            [
                'movement_id' => 2,
                'painting_id' => 3,
            ],
            [
                'movement_id' => 1,
                'painting_id' => 1,
            ],
            [
                'movement_id' => 4,
                'painting_id' => 2,
            ],
            [
                'movement_id' => 1,
                'painting_id' => 4,
            ],
            [
                'movement_id' => 4,
                'painting_id' => 5,
            ],
        ]);
    }
}