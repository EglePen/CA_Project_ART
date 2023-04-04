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
use Database\Seeders\MethodPaintingSeeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call([
            MethodSeeder::class,
            ArtistSeeder::class,
            MovementSeeder::class,
            LocationSeeder::class,
            PaintingSeeder::class,
            FrameSeeder::class,
            ColorSeeder::class,
            MethodPaintingSeeder::class,
            UserSeeder::class,
        ]);
    }
}
