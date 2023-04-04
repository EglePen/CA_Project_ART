<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Date;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class LocationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('locations')->delete();

        DB::table('locations')->insert([
            [
                'name'=> 'Tate Britain',
                'created_at' => Date::now(),
                'updated_at' => Date::now(),
            ],
            [
                'name'=> 'MoMa the Museum of Modern Art',
                'created_at' => Date::now(),
                'updated_at' => Date::now(),
            ],
            [
                'name'=> 'Princeton University Art Museum',
                'created_at' => Date::now(),
                'updated_at' => Date::now(),
            ],
            [
                'name'=> 'Brooklyn Museum',
                'created_at' => Date::now(),
                'updated_at' => Date::now(),
            ],
            [
                'name'=> 'Serpentine Galleries',
                'created_at' => Date::now(),
                'updated_at' => Date::now(),
            ],
            [
                'name'=> 'Philadelphia Museum of Art',
                'created_at' => Date::now(),
                'updated_at' => Date::now(),
            ],
            [
                'name'=> 'Neue Galerie New York',
                'created_at' => Date::now(),
                'updated_at' => Date::now(),
            ],
            [
                'name'=> 'The Museum of fine Arts',
                'created_at' => Date::now(),
                'updated_at' => Date::now(),
            ],
            [
                'name'=> 'SMK- Statens Museum for Kunst',
                'created_at' => Date::now(),
                'updated_at' => Date::now(),
            ],
        ]);
    }
}
