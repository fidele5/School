<?php

namespace Database\Seeders;

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
        if (\App\Models\Setting::count() == 0) {
            $this->call(SettingSeeder::class);
        }
    }
}
