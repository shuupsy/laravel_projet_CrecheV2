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
                "picturePermission" => "yes",
                "exitPermission" => "no",
                "allergy" => "oeuf,tomate,raisin",
                "size" => "70cm",
                "weight" => "8kg",
                "surveillanceSelles" => "yes",
                "teething" => "no",
                "presence" => "3",
                "dayOfPresence" => "lundi/mercredi/vendredi"
            ],
            [
                "backaccueil_id" => 2,
                "nutritional" => "mange avec les mains",
                "picturePermission" => "yes",
                "exitPermission" => "no",
                "allergy" => "oeuf,tomate,raisin",
                "size" => "70cm",
                "weight" => "8kg",
                "surveillanceSelles" => "yes",
                "teething" => "no",
                "presence" => "1",
                "dayOfPresence" => "lundi"
            ],
            [
                "backaccueil_id" => 3,
                "nutritional" => "mange avec une cullière",
                "picturePermission" => "yes",
                "exitPermission" => "no",
                "allergy" => "oeuf,tomate,raisin",
                "size" => "70cm",
                "weight" => "8kg",
                "surveillanceSelles" => "yes",
                "teething" => "no",
                "presence" => "3",
                "dayOfPresence" => "lundi/mercredi/vendredi"
            ],
            [
                "backaccueil_id" => 4,
                "nutritional" => "mange avec une cullière",
                "picturePermission" => "yes",
                "exitPermission" => "no",
                "allergy" => "oeuf,raisin",
                "size" => "70cm",
                "weight" => "8kg",
                "surveillanceSelles" => "yes",
                "teething" => "no",
                "presence" => "3",
                "dayOfPresence" => "lundi/mercredi/vendredi"
            ],
            ]);


    }
}
