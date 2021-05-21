<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AvatarSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('avatars')->insert([
            [
                'imgAva' => 'avatar1.jpg',
                'created_at' => now(),
            ],
            [
                'imgAva' => 'avatar2.jpg',
                'created_at' => now(),
            ],
            [
                'imgAva' => 'avatar3.jpg',
                'created_at' => now(),
            ],
            [
                'imgAva' => 'avatar4.jpg',
                'created_at' => now(),
            ],
            [
                'imgAva' => 'avatar5.jpg',
                'created_at' => now(),
            ],
        ]);
    }
}
