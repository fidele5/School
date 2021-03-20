<?php

namespace Database\Seeders;

use App\Models\Setting;
use Illuminate\Database\Seeder;

class SettingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Setting::create(['option_key' => 'app_name', 'option_value' => 'Isamm']);
        Setting::create(['option_key' => 'app_language', 'option_value' => 'fr']);
        Setting::create(['option_key' => 'address', 'option_value' => 'Your Company Address']);
        Setting::create(['option_key' => 'phone', 'option_value' => '0123 456 789']);
        Setting::create(['option_key' => 'email', 'option_value' => 'fideleplk@gmail.com']);
        Setting::create(['option_key' => 'default_caroussel', 'option_value' => 'actualites']);
    }
}
