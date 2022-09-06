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
                "prenom" => "Henry",
                "img" => "team/photo-1546015720-b8b30df5aa27.avif",
                "sexe" => "Masculin",
                "age" => 3
            ],
            [
                "nom" => "Fischer",
                "prenom" => "Claire",
                "img" => "team/photo-1548897969-80be2924dc9f.avif",
                "sexe" => "Feminin",
                "age" => 1
            ],
            [
                "nom" => "Gimenes",
                "prenom" => "Inès",
                "img" => "team/photo-1608365151231-7dbed3034787.avif",
                "sexe" => "Feminin",
                "age" => 2
            ],
            [
                "nom" => "Leger",
                "prenom" => "Jules",
                "img" => "team/photo-1503454537195-1dcabb73ffb9.avif",
                "sexe" => "Masculin",
                "age" => 2
            ]
            ]);
    }
}
