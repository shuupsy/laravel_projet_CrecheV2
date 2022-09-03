<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class BackaccueilSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table("backaccueils")->insert([
            [
                "nom" => "Meunier",
                "prenom" => "Henriette",
                "img" => "photo-1546015720-b8b30df5aa27.avif",
                "surnom" => "Surnom"
            ],
            [
                "nom" => "Fischer",
                "prenom" => "Claire",
                "img" => "photo-1548897969-80be2924dc9f.avif",
                "surnom" => "Surnom"
            ],
            [
                "nom" => "Inès",
                "prenom" => "Gimenes",
                "img" => "photo-1608365151231-7dbed3034787.avif",
                "surnom" => "Surnom"
            ],
            [
                "nom" => "Leger",
                "prenom" => "Julie",
                "img" => "photo-1503454537195-1dcabb73ffb9.avif",
                "surnom" => "Surnom"
            ]
            ]);
    }
}
