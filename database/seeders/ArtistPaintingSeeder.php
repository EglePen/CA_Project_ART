<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class ArtistPaintingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('artist_painting')->insert([
            [
                'artist_id' => 1,
                'painting_id' => 6,
            ],
            [
                'artist_id' => 2,
                'painting_id' => 3,
            ],
            [
                'artist_id' => 1,
                'painting_id' => 1,
            ],
            [
                'artist_id' => 4,
                'painting_id' => 2,
            ],
            [
                'artist_id' => 1,
                'painting_id' => 4,
            ],
            [
                'artist_id' => 4,
                'painting_id' => 5,
            ],
        ]);
    }
}
