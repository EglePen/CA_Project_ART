<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Date;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class MovementSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('movements')->delete();

        DB::table('movements')->insert([
            [
                'name'=> 'Surrealism',
                'created_at' => Date::now(),
                'updated_at' => Date::now(),
            ],
            [
                'name'=> 'Suprematism',
                'created_at' => Date::now(),
                'updated_at' => Date::now(),
            ],
            [
                'name'=> 'Pop',
                'created_at' => Date::now(),
                'updated_at' => Date::now(),
            ],
            [
                'name'=> 'Symbolism',
                'created_at' => Date::now(),
                'updated_at' => Date::now(),
            ],
            [
                'name'=> 'Romanticism',
                'created_at' => Date::now(),
                'updated_at' => Date::now(),
            ],
            [
                'name'=> 'Impressionism',
                'created_at' => Date::now(),
                'updated_at' => Date::now(),
            ],
            [
                'name'=> 'Modernism',
                'created_at' => Date::now(),
                'updated_at' => Date::now(),
            ],
            [
                'name'=> 'Fauvism',
                'created_at' => Date::now(),
                'updated_at' => Date::now(),
            ],
            [
                'name'=> ' Post-Impressionism',
                'created_at' => Date::now(),
                'updated_at' => Date::now(),
            ],
        ]);
    }
}
