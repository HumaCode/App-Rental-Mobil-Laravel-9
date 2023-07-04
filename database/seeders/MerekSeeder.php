<?php

namespace Database\Seeders;

use App\Models\BrandMobil;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class MerekSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        BrandMobil::create([
            'merek'             => 'Daihatsu',
            'created_at'        => date('Y-m-d H:i:s', time()),
            'updated_at'        => date('Y-m-d H:i:s', time()),
        ]);

        BrandMobil::create([
            'merek'             => 'Toyota',
            'created_at'        => date('Y-m-d H:i:s', time()),
            'updated_at'        => date('Y-m-d H:i:s', time()),
        ]);

        BrandMobil::create([
            'merek'             => 'Honda',
            'created_at'        => date('Y-m-d H:i:s', time()),
            'updated_at'        => date('Y-m-d H:i:s', time()),
        ]);

        BrandMobil::create([
            'merek'             => 'Mitsubishi',
            'created_at'        => date('Y-m-d H:i:s', time()),
            'updated_at'        => date('Y-m-d H:i:s', time()),
        ]);
    }
}
