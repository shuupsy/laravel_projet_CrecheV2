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
                "nom" => "nom 1",
                "prenom" => "prenom 1",
                "poste" => "Direction"
            ],
            [
                "img" => "lien à modifier",
                "nom" => "nom 2",
                "prenom" => "prenom 2",
                "poste" => "Direction"
            ],
            [
                "img" => "lien à modifier",
                "nom" => "nom 3",
                "prenom" => "prenom 3",
                "poste" => "Comptable"
            ],
            [
                "img" => "lien à modifier",
                "nom" => "nom 4",
                "prenom" => "prenom 4",
                "poste" => "Puéricultrice"
            ],
            [
                "img" => "lien à modifier",
                "nom" => "nom 5",
                "prenom" => "prenom 5",
                "poste" => "Puéricultrice"
            ],
            [
                "img" => "lien à modifier",
                "nom" => "nom 6",
                "prenom" => "prenom 6",
                "poste" => "Puéricultrice"
            ]
            ]);
    }
}
