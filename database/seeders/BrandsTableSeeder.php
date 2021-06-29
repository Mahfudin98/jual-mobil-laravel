<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BrandsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::insert("INSERT INTO car_brands (name,slug) VALUES
            ('Toyota','toyota'),
            ('Daihatsu','daihatsu'),
            ('Honda','honda'),
            ('Mitsubishi','mitsubishi'),
            ('Suzuki','suzuki'),
            ('Nissan','nissan'),
            ('Wuling','wuling'),
            ('Datsun','datsun'),
            ('BMW','bmw');"
        );
    }
}
