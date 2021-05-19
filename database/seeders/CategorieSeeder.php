<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategorieSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('categories')->insert([
            ['nomCat' => 'art',
            'created_at' => now(),
            ],
            ['nomCat' => 'food',
            'created_at' => now(),
            ],
            ['nomCat' => 'car',
            'created_at' => now(),
            ],
            ['nomCat' => 'animal',
            'created_at' => now(),
            ],
            ['nomCat' => 'tec',
            'created_at' => now(),
            ],
        ]);
    }
}
