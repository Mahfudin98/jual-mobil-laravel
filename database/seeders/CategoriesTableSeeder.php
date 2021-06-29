<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::insert("INSERT INTO car_categories (name,slug) VALUES
            ('Mobil Sport','mobil-sport'),
            ('Mobil SUV','mobil-suv'),
            ('Mobil Convertible','mobil-convertible'),
            ('Mobil Coupe','mobil-coupe'),
            ('Mobil Hatchback','mobil-hatchback'),
            ('Mobil MPV','mobil-mpv'),
            ('Mobil Station Wagon','mobil-station-wagon'),
            ('Mobil Sedan','mobil-sedan'),
            ('Mobil Of Road','mobil-of-road');"
        );
    }
}
