<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Database\Seeders\UserSeeder;
use Database\Seeders\ColorSeeder;
use Database\Seeders\FrameSeeder;
use Database\Seeders\MethodSeeder;
use Database\Seeders\LocationSeeder;
use Database\Seeders\MovementSeeder;
use Database\Seeders\PaintingSeeder;
use Database\Seeders\ArtistPaintingSeeder;
use Database\Seeders\MethodPaintingSeeder;
use Database\Seeders\LocationPaintingSeeder;
use Database\Seeders\MovementPaintingSeeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call([
            PaintingSeeder::class,
            MethodSeeder::class,
            ArtistSeeder::class,
            MovementSeeder::class,
            LocationSeeder::class,
            FrameSeeder::class,
            ColorSeeder::class,
            ArtistPaintingSeeder::class,
            MethodPaintingSeeder::class,
            MovementPaintingSeeder::class,
            LocationPaintingSeeder::class,
            UserSeeder::class,
        ]);
    }
}
