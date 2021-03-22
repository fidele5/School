<?php

namespace Database\Seeders;

use App\Models\Caroussel;
use Illuminate\Database\Seeder;

class CarousselSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Caroussel::create([
            "image"=>"slider-hp2-1-100x50.jpg",
            "titre"=>"The Best University Of The State",
            "description"=>"",
        ]);

        Caroussel::create([
            "image"=>"slider-hp2-2-100x50.jpg",
            "titre"=>"Be apart of our history",
            "description"=>"Kingster University was established by John Smith in 1920 for the public benefit and it is recognized globally. Throughout our great history, Kingster has offered access to a wide range of academic opportunities",
        ]);

        Caroussel::create([
            "image"=>"slider-hp2-3-100x50.jpg",
            "titre"=>"Join the champion",
            "description"=>"",
        ]);

        Caroussel::create([
            "image"=>"slider-hp2-4-100x50.jpg",
            "titre"=>"Great Quality Social Life",
            "description"=>"",
        ]);

    }
}
