<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('categories')->insert([
            [
                'designation' => 'Mathématiques',
                'description' => 'Étude des nombres, des quantités et des formes.',
                'image' => 'https://example.com/images/math.jpg',
            ],
            [
                'designation' => 'Physique',
                'description' => 'Étude de la matière, du mouvement et de l\'énergie.',
                'image' => 'https://example.com/images/physics.jpg',
            ],
            [
                'designation' => 'Chimie',
                'description' => 'Étude des substances et de leurs propriétés.',
                'image' => 'https://example.com/images/chemistry.jpg',
            ],
            [
                'designation' => 'Biologie',
                'description' => 'Étude des organismes vivants.',
                'image' => 'https://example.com/images/biology.jpg',
            ],
            [
                'designation' => 'Histoire',
                'description' => 'Étude des événements passés.',
                'image' => 'https://example.com/images/history.jpg',
            ],
            [
                'designation' => 'Géographie',
                'description' => 'Étude de la Terre et de ses caractéristiques.',
                'image' => 'https://example.com/images/geography.jpg',
            ],
            [
                'designation' => 'Littérature anglaise',
                'description' => 'Étude des œuvres écrites en langue anglaise.',
                'image' => 'https://example.com/images/english_literature.jpg',
            ],
            [
                'designation' => 'Informatique',
                'description' => 'Étude des ordinateurs et des systèmes informatiques.',
                'image' => 'https://example.com/images/computer_science.jpg',
            ],
        ]);
    }
}
