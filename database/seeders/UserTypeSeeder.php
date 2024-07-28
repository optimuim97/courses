<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UserTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        DB::table('user_types')->insert([
            ['designation' => 'Admin', 'description' => 'Administrateur du système'],
            ['designation' => 'Instructor', 'description' => 'Utilisateur invité'],
            ['designation' => 'Student', 'description' =>  'Utilisateur standard'],
        ]);
    }
}
