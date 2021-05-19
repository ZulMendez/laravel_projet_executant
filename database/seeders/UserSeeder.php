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
            'nom' => 'Mendez',
            'prenom' => 'Zulma',
            'age' => 30,
            'avatar_id' => 1,
            'role_id' => 1,
            'email' => 'zumendez7@gmail.com',
            'password' => Hash::make('hello'),
            'created_at' => now(),
        ]);
    }
}
