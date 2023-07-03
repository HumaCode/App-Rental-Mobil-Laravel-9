<?php

namespace Database\Seeders;

use App\Models\Setting;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
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
        Setting::create([
            'title'             => 'App Rental',
            'keyword'           => 'app-rental',
            'meta_description'  => 'App Rental',
            'about'             => 'about',
            'location'          => 'https://goo.gl/maps/PajHy3XGmXZPir1L6',
            'telp'              => '0988348384832',
            'email_web'         => 'admin@gmail.com',
            'fb'                => 'www.facebook.com',
            'twitter'           => 'www.twitter.com',
            'ig'                => 'www.instagram.com',
            'created_at'        => date('Y-m-d H:i:s', time()),
            'updated_at'        => date('Y-m-d H:i:s', time()),
        ]);
    }
}
