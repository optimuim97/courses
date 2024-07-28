<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SpecialitiesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('specialities')->insert([
            ['designation' => 'Mathématiques', 'description' => 'L\'étude des nombres, des quantités et des formes.'],
            ['designation' => 'Physique', 'description' => 'L\'étude de la matière, de l\'énergie et des interactions entre elles.'],
            ['designation' => 'Chimie', 'description' => 'L\'étude des substances et de leurs propriétés et réactions.'],
            ['designation' => 'Biologie', 'description' => 'L\'étude des organismes vivants.'],
            ['designation' => 'Histoire', 'description' => 'L\'étude des événements passés.'],
            ['designation' => 'Littérature', 'description' => 'L\'étude des œuvres écrites, telles que la fiction, la poésie et le théâtre.'],
        ]);
    }
}
