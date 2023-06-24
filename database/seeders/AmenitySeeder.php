<?php
declare (strict_types = 1);

namespace Database\Seeders;

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
            ['name' => 'Credit Cards'],
            ['name' => 'Catering'],
            ['name' => 'Parking'],
            ['name' => 'Free Wi-Fi'],
            ['name' => 'Wheelchair'],
            ['name' => 'Outdoor'],
            ['name' => 'Waiter'],
            ['name' => 'Happy Hour'],
            ['name' => 'Alcohol'],
            ['name' => 'TV'],
            ['name' => 'Private Dining'],
            ['name' => 'Bike Parking'],
        ];

        DB::table('amenities')->insert($amenities);
    }
}
