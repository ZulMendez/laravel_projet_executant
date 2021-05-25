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
                'nom' => 'Avatar Femme',
                'imgAva' => 'avatar1.jpg',
                'created_at' => now(),
            ],
            [
                'nom' => 'Avatar Homme',
                'imgAva' => 'avatar2.jpg',
                'created_at' => now(),
            ],
            [
                'nom' => 'Avatar Femme',
                'imgAva' => 'avatar3.jpg',
                'created_at' => now(),
            ],
            [
                'nom' => 'Avatar Homme',
                'imgAva' => 'avatar4.jpg',
                'created_at' => now(),
            ],
            [
                'nom' => 'Avatar Default F',
                'imgAva' => 'avatar5.jpg',
                'created_at' => now(),
            ],
            [
                'nom' => 'Avatar Default H',
                'imgAva' => 'avatar6.jpg',
                'created_at' => now(),
            ],
        ]);
    }
}
