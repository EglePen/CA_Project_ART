<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class MethodPaintingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('method_painting')->insert([
            [

                'method_id' => 1,
                'painting_id' => 6,

            ],
            [

                'method_id' => 2,
                'painting_id' => 3,

            ],
            [

                'method_id' => 1,
                'painting_id' => 1,

            ],
            [

                'method_id' => 4,
                'painting_id' => 2,

            ],
            [

                'method_id' => 1,
                'painting_id' => 4,

            ],
            [

                'method_id' => 4,
                'painting_id' => 5,

            ],
        ]);
    }
}