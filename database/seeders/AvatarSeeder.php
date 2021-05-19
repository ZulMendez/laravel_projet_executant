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
                'imgAva' => 'avatar-1.jpg',
                'created_at' => now(),
            ],
            [
                'imgAva' => 'avatar-2.jpg',
                'created_at' => now(),
            ],
            [
                'imgAva' => 'avatar-3.jpg',
                'created_at' => now(),
            ],
            [
                'imgAva' => 'avatar-4.jpg',
                'created_at' => now(),
            ],
            [
                'imgAva' => 'avatar-5.jpg',
                'created_at' => now(),
            ],
        ]);
    }
}
