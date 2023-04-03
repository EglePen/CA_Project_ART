<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Date;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('users')->insert([
            'first_name' => 'Egle',
            'last_name' => 'Penkaityte',
            'email' => 'test@test.test',
            'password' => Hash::make('rootroot'),
            'created_at' => Date::now(),
            'updated_at' => Date::now()
        ]);
    }
}
