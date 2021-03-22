<?php

namespace Database\Seeders;

use App\Models\Caroussel;
use App\Models\Setting;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        if (Setting::count() == 0) {
            $this->call(SettingSeeder::class);
        }

        if (Caroussel::count() == 0) {
            $this->call(CarousselSeeder::class);
        }
    }
}
