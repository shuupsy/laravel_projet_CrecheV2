<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class InventaireparentsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table("inventaireparents")->insert([

            [
                "name" => "Habits de rechange",
                "quantity" => 5,
                "img" => "pijama-baby-clothes-svgrepo-com.svg"
            ],
            [
                "name" => "Couche",
                "quantity" => 12,
                "img" => "diaper.svg"
            ],
            [
                "name" => "Lait",
                "quantity" => 3,
                "img" => "feeding-bottle.svg"
            ],
            [
                "name" => "Tute",
                "quantity" => 1,
                "img" => "pacifier-svgrepo-com.svg"
            ],
            [
                "name" => "Doudou",
                "quantity" => 1,
                "img" => "teddy-bear.svg"
            ]

        ]);
    }
}
