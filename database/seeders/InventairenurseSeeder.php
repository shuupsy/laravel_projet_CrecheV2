<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class InventairenurseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table("inventairenurses")->insert([
            [
                "name" => "Produits d'entretien",
                "quantity" => 3,
                "img" => "cleaning-mop.svg"
            ],
            [
                "name" => "Couche",
                "quantity" => 34,
                "img" => "diaper.svg"
            ],
            [
                "name" => "Savon",
                "quantity" => 9,
                "img" => "bathing-clean-cleansing-2-svgrepo-com.svg"
            ],
            [
                "name" => "Désinfectant",
                "quantity" => 1,
                "img" => "alcohol-svgrepo-com.svg"
            ],
            [
                "name" => "Savon partie intime",
                "quantity" => 2,
                "img" => "shampoo-svgrepo-com.svg"
            ],
            [
                "name" => "Serum physiologique",
                "quantity" => 6,
                "img" => "serum.svg"
            ],
            [
                "name" => "Coton tige",
                "quantity" => 10,
                "img" => "cotton-swab.svg"
            ],
            [
                "name" => "Crème pour les fesses",
                "quantity" => 0,
                "img" => "baby-powder-powder-svgrepo-com.svg"
            ],
            [
                "name" => "Elastiques pour cheveux",
                "quantity" => 23,
                "img" => "hair-clamp.svg"
            ]
        ]);
    }
}
