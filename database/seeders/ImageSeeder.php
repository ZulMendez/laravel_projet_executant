<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ImageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('images')->insert([
            [
                "nomImage" => 'Art',
                'src' => 'art2.jpg',
                'categorie_id' => 1,
                'created_at' => now(),
            ],
            // [
            //     "nomImage" => 'Art',
            //     'src' => 'art3.jpg',
            //     'categorie_id' => 1,
            //     'created_at' => now(),
            // ],
            [
                "nomImage" => 'Food',
                'src' => 'food2.jpg',
                'categorie_id' => 2,
                'created_at' => now(),
            ],
            // [
            //     "nomImage" => 'Food',
            //     'src' => 'food4.jpg',
            //     'categorie_id' => 2,
            //     'created_at' => now(),
            // ],
            [
                "nomImage" => 'Car',
                'src' => 'car1.jpg',
                'categorie_id' => 3,
                'created_at' => now(),
            ],
            // [
            //     "nomImage" => 'Car',
            //     'src' => 'car2.jpg',
            //     'categorie_id' => 3,
            //     'created_at' => now(),
            // ],
            [
                "nomImage" => 'Animal',
                'src' => 'animal1.jpg',
                'categorie_id' => 4,
                'created_at' => now(),
            ],
            // [
            //     "nomImage" => 'Animal',
            //     'src' => 'animal2.jpg',
            //     'categorie_id' => 4,
            //     'created_at' => now(),
            // ],
            [
                "nomImage" => 'Tec',
                'src' => 'tec1.jpg',
                'categorie_id' => 5,
                'created_at' => now(),
            ],
            // [
            //     "nomImage" => 'Tec',
            //     'src' => 'tec2.jpg',
            //     'categorie_id' => 5,
            //     'created_at' => now(),
            // ],
        ]);
    }
}
