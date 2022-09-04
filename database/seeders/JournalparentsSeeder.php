<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class JournalparentsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        DB::table("journalparents")->insert([
            [
                "accident" => "none",
                "eat" => "TB",
                "activity" => "coloriage + peinture",
                "day" => "07 septembre 2022",
                "arrivalTime" => "7:45",
                "departTime" => "17:30",
                "sleep" => 3,
                "poo" => 3,
                "change" => 2,
                "temperature" => "38.7",
                "humeur" => "joyeux"
            ]
        ]);

    }
}
