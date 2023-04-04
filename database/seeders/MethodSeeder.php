<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Date;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class MethodSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('methods')->delete();

        DB::table('methods')->insert([
            [
                'name'=> 'Tempera',
                'created_at' => Date::now(),
                'updated_at' => Date::now(),
            ],
            [
                'name'=> 'Oil Paint',
                'created_at' => Date::now(),
                'updated_at' => Date::now(),
            ],
            [
                'name'=> 'Acrylic Paint',
                'created_at' => Date::now(),
                'updated_at' => Date::now(),
            ],
            [
                'name'=> 'Watercolors',
                'created_at' => Date::now(),
                'updated_at' => Date::now(),
            ],
            [
                'name'=> 'Charoal',
                'created_at' => Date::now(),
                'updated_at' => Date::now(),
            ],
            [
                'name'=> 'Pastels',
                'created_at' => Date::now(),
                'updated_at' => Date::now(),
            ],
            [
                'name'=> 'Chalk',
                'created_at' => Date::now(),
                'updated_at' => Date::now(),
            ],
            [
                'name'=> 'Graphite Pencils',
                'created_at' => Date::now(),
                'updated_at' => Date::now(),
            ],
            [
                'name'=> 'Gold',
                'created_at' => Date::now(),
                'updated_at' => Date::now(),
            ],
            [
                'name'=> 'Silver',
                'created_at' => Date::now(),
                'updated_at' => Date::now(),
            ],

        ]);
        
    }
}
