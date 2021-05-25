<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            [   
                'nom' => 'Mendez',
                'prenom' => 'Zulma',
                'age' => 30,
                'avatar_id' => 1,
                'role_id' => 1,
                'email' => 'zumendez7@gmail.com',
                'password' => Hash::make('hello'),
                'created_at' => now(),
            ],
            [
                'nom' => 'BG',
                'prenom' => 'YO',
                'age' => 25,
                'avatar_id' => 2,
                'role_id' => 3,
                'email' => "yo@bs.com",
                'password' =>Hash::make('testtest'),
                'created_at' => now(),
            ],
            [
                'nom' => 'Gg',
                'prenom' => 'Jul',
                'age' => 23,
                'avatar_id' => 4,
                'role_id' => 2,
                'email' => "test@molengeek.com",
                'password' =>Hash::make('test'),
                'created_at' => now(),
            ],
            [
                'nom' => 'Abou',
                'prenom' => 'Elias',
                'age' => 24,
                'avatar_id' => 5,
                'role_id' => 2,
                'email' => "test@test.com",
                'password' =>Hash::make('testtest'),
                'created_at' => now(),
            ],
        ]);
    }
}
