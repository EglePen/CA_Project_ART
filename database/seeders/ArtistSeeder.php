<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Date;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class ArtistSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('artists')->delete();

        DB::table('artists')->insert([
            [
                'first_name'=> 'Gustav',
                'last_name' => 'Klimt',
                'date_of_birth' => '1862-07-14',
                'created_at' => Date::now(),
                'updated_at' => Date::now(),
            ],
            [
                'first_name'=> 'Paul',
                'last_name' => 'Klee',
                'date_of_birth' => '1879-12-18',
                'created_at' => Date::now(),
                'updated_at' => Date::now(),
            ],
            [
                'first_name'=> 'Do Ho',
                'last_name' => 'Suh',
                'date_of_birth' => '1962-01-17',
                'created_at' => Date::now(),
                'updated_at' => Date::now(),
            ],
            [
                'first_name'=> 'Henri',
                'last_name' => 'Matisse',
                'date_of_birth' => '1869-12-31',
                'created_at' => Date::now(),
                'updated_at' => Date::now(),
            ],
            [
                'first_name'=> 'Stuart',
                'last_name' => 'Davis',
                'date_of_birth' => '1892-12-07',
                'created_at' => Date::now(),
                'updated_at' => Date::now(),
            ],
            [
                'first_name'=> 'Zaha',
                'last_name' => 'Hadid',
                'date_of_birth' => '1950-10-31',
                'created_at' => Date::now(),
                'updated_at' => Date::now(),
            ],
            [
                'first_name'=> 'Claude',
                'last_name' => 'Monet',
                'date_of_birth' => '1840-11-14',
                'created_at' => Date::now(),
                'updated_at' => Date::now(),
            ],
            [
                'first_name'=> 'Paul',
                'last_name' => 'Gauguin',
                'date_of_birth' => '1848-06-07',
                'created_at' => Date::now(),
                'updated_at' => Date::now(),
            ],
            [
                'first_name'=> 'William',
                'last_name' => 'Blake',
                'date_of_birth' => '1757-11-11',
                'created_at' => Date::now(),
                'updated_at' => Date::now(),
            ],
        ]);
    }
}
