<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class FrontaccueilSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table("frontaccueils")->insert([
            [
                "img" => "femme3",
                "nom" => "Martin",
                "prenom" => "Zoé",
                "poste" => "Direction"
            ],
            [
                "img" => "femme1",
                "nom" => "Wauters",
                "prenom" => "Ilyana",
                "poste" => "Direction"
            ],
            [
                "img" => "homme1",
                "nom" => "Stevens",
                "prenom" => "Max",
                "poste" => "Comptable"
            ],
            [
                "img" => "femme2",
                "nom" => "Van de velde",
                "prenom" => "Elyna",
                "poste" => "Puéricultrice"
            ],
            [
                "img" => "femme4",
                "nom" => "Lambert",
                "prenom" => "Sophia",
                "poste" => "Puéricultrice"
            ],
            [
                "img" => "femme5",
                "nom" => "Mertens",
                "prenom" => "Amelie",
                "poste" => "Puéricultrice"
            ]
            ]);
    }
}
