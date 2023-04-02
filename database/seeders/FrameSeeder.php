<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Date;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class FrameSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('frames')->delete();

        DB::table('frames')->insert([
            [
                'dimensions'=> '13x18',
                'price'=> 8.30,
                'created_at' => Date::now(),
                'updated_at' => Date::now(),
            ],
            [
                'dimensions'=> '21x30',
                'price'=> 9.90,
                'created_at' => Date::now(),
                'updated_at' => Date::now(),
            ],
            [
                'dimensions'=> '30x40',
                'price'=> 13.50,
                'created_at' => Date::now(),
                'updated_at' => Date::now(),
            ],
            [
                'dimensions'=> '40x50',
                'price'=> 14.50,
                'created_at' => Date::now(),
                'updated_at' => Date::now(),
            ],
            [
                'dimensions'=> '50x50',
                'price'=> 15.00,
                'created_at' => Date::now(),
                'updated_at' => Date::now(),
            ],
            [
                'dimensions'=> '70x100',
                'price'=> 17.50,
                'created_at' => Date::now(),
                'updated_at' => Date::now(),
            ],
            [
                'dimensions'=> '50x70',
                'price'=> 18.50,
                'created_at' => Date::now(),
                'updated_at' => Date::now(),
            ],
            [
                'dimensions'=> '100x120',
                'price'=> 24.50,
                'created_at' => Date::now(),
                'updated_at' => Date::now(),
            ],

        ]);
    }
    }
