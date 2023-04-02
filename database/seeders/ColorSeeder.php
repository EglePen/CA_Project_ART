<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Date;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class ColorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
    DB::table('colors')->delete();

    DB::table('colors')->insert([
        [
            'name'=> 'white',
            'created_at' => Date::now(),
            'updated_at' => Date::now(),
        ],
        [
            'name'=> 'grey',
            'created_at' => Date::now(),
            'updated_at' => Date::now(),
        ],
        [
            'name'=> 'pink',
            'created_at' => Date::now(),
            'updated_at' => Date::now(),
        ],
        [
            'name'=> 'purple',
            'created_at' => Date::now(),
            'updated_at' => Date::now(),
        ],
        [
            'name'=> 'dark blue',
            'created_at' => Date::now(),
            'updated_at' => Date::now(),
        ],
        [
            'name'=> 'light blue',
            'created_at' => Date::now(),
            'updated_at' => Date::now(),
        ],
        [
            'name'=> 'green',
            'created_at' => Date::now(),
            'updated_at' => Date::now(),
        ],
        [
            'name'=> 'yellow',
            'created_at' => Date::now(),
            'updated_at' => Date::now(),
        ],
        [
            'name'=> 'orange',
            'created_at' => Date::now(),
            'updated_at' => Date::now(),
        ],
        [
            'name'=> 'red',
            'created_at' => Date::now(),
            'updated_at' => Date::now(),
        ],
        [
            'name'=> 'brown',
            'created_at' => Date::now(),
            'updated_at' => Date::now(),
        ],
        [
            'name'=> 'dark grey',
            'created_at' => Date::now(),
            'updated_at' => Date::now(),
        ],
        [
            'name'=> 'black',
            'created_at' => Date::now(),
            'updated_at' => Date::now(),
        ],
    ]);
    }
}
