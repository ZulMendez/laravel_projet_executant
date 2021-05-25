<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ArticleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('articles')->insert([
            [
                'src' => 'danse.jpg',
                'auteur' => 'Inconnu',
                'titre' => 'KINÉSITHÉRAPIE DE LA DANSE',
                'description' => "La danse est un sport où l’ensemble du corps est soumis à de fortes tensions.",
                'created_at' => now(),
            ],
            [
                'src' => 'meditation.jpg',
                'auteur' => 'Inconnu',
                'titre' => 'MEDITATION',
                'description' => "Méditer pour la première fois en tant que débutant peut procurer un drôle de sentiment.",
                'created_at' => now(),
            ],
        ]);
    }
}
