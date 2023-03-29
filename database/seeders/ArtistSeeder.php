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
                'first_name'=> 'Zaha',
                'last_name' => 'Hadid',
                'date_of_birth' => '1950-01-01',
                'created_at' => Date::now(),
                'updated_at' => Date::now(),
            ],
            [
                'first_name'=> 'William',
                'last_name' => 'Blake',
                'date_of_birth' => '1757-01-01',
                'created_at' => Date::now(),
                'updated_at' => Date::now(),
            ],
            [
                'first_name'=> 'Claude',
                'last_name' => 'Monet',
                'date_of_birth' => '1840-01-01',
                'created_at' => Date::now(),
                'updated_at' => Date::now(),
            ],
            [
                'first_name'=> 'Chalermchai',
                'last_name' => 'Kositpipat',
                'date_of_birth' => '1955-01-01',
                'created_at' => Date::now(),
                'updated_at' => Date::now(),
            ],
            [
                'first_name'=> 'Paul',
                'last_name' => 'Klee',
                'date_of_birth' => '1879-01-01',
                'created_at' => Date::now(),
                'updated_at' => Date::now(),
            ],
        ]);
    }
}
