<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ColorsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::insert("INSERT INTO car_colors (name,slug) VALUES
            ('Putih','putih'),
            ('Hitam','hitam'),
            ('Silver','silver'),
            ('Gray','gray'),
            ('Merah','merah'),
            ('Kuning','kuning'),
            ('Biru','biru'),
            ('Hijau','hijau'),
            ('Ungu','ungu');"
        );
    }
}
