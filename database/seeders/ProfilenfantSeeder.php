<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class ProfilenfantSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table("profilenfants")->insert([
            [
                "backaccueil_id" => 1,
                "nutritional" => "mange avec une cullière, mixé, préfère courgette, hallal",
                "picturePermission" => true,
                "exitPermission" => false,
                "allergy" => "oeuf,tomate,raisin",
                "size" => "70cm",
                "weight" => "8kg",
                "surveillanceSelles" => "oui",
                "teething" => "non",
                "presence" => "3",
                "dayOfPresence" => "lundi/mercredi/vendredi"
            ],
            [
                "backaccueil_id" => 2,
                "nutritional" => "mange avec les mains",
                "picturePermission" => true,
                "exitPermission" => false,
                "allergy" => "oeuf,tomate,raisin",
                "size" => "70cm",
                "weight" => "8kg",
                "surveillanceSelles" => "oui",
                "teething" => "non",
                "presence" => "1",
                "dayOfPresence" => "lundi"
            ],
            [
                "backaccueil_id" => 3,
                "nutritional" => "mange avec une cullière",
                "picturePermission" => true,
                "exitPermission" => false,
                "allergy" => "oeuf,tomate,raisin",
                "size" => "70cm",
                "weight" => "8kg",
                "surveillanceSelles" => "oui",
                "teething" => "non",
                "presence" => "3",
                "dayOfPresence" => "lundi/mercredi/vendredi"
            ],
            [
                "backaccueil_id" => 4,
                "nutritional" => "mange avec une cullière",
                "picturePermission" => true,
                "exitPermission" => false,
                "allergy" => "oeuf,raisin",
                "size" => "70cm",
                "weight" => "8kg",
                "surveillanceSelles" => "oui",
                "teething" => "non",
                "presence" => "3",
                "dayOfPresence" => "lundi/mercredi/vendredi"
            ],
            ]);


    }
}
