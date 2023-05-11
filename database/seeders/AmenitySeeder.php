<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AmenitySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $amenities = [
            ['name' => 'Health ScorePASS'],
            ['name' => 'Powered by Hazel Analytics'],
            ['name' => 'Offers Delivery'],
            ['name' => 'Offers Takeout'],
            ['name' => 'Proof of vaccination required'],
            ['name' => 'All staff fully vaccinated'],
            ['name' => 'Masks required'],
            ['name' => 'Staff wears masks'],
            ['name' => 'Accepts Credit Cards'],
            ['name' => 'Offers Catering'],
            ['name' => 'Street Parking'],
            ['name' => 'Free Wi-Fi'],
            ['name' => 'Drive-Thru'],
            ['name' => 'Wheelchair Accessible'],
            ['name' => 'Covered Outdoor Seating'],
            ['name' => 'Outdoor Seating'],
            ['name' => 'Waiter Service'],
            ['name' => 'Happy Hour'],
            ['name' => 'Alcohol'],
            ['name' => 'TV'],
            ['name' => 'Heated Outdoor Seating'],
            ['name' => 'Private Dining'],
            ['name' => 'Bike Parking'],
        ];

        DB::table('categories')->insert($amenities);
    }
}
