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
                "img" => "lien à modifier",
                "nom" => "Martin",
                "prenom" => "Zoé",
                "poste" => "Direction"
            ],
            [
                "img" => "lien à modifier",
                "nom" => "Wauters",
                "prenom" => "Ilyana",
                "poste" => "Direction"
            ],
            [
                "img" => "lien à modifier",
                "nom" => "Stevens",
                "prenom" => "Max",
                "poste" => "Comptable"
            ],
            [
                "img" => "lien à modifier",
                "nom" => "Van de velde",
                "prenom" => "Elyna",
                "poste" => "Puéricultrice"
            ],
            [
                "img" => "lien à modifier",
                "nom" => "Lambert",
                "prenom" => "Sophia",
                "poste" => "Puéricultrice"
            ],
            [
                "img" => "lien à modifier",
                "nom" => "Mertens",
                "prenom" => "Amelie",
                "poste" => "Puéricultrice"
            ]
            ]);
    }
}
