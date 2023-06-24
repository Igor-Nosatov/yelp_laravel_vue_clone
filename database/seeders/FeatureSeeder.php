<?php
declare (strict_types = 1);

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class FeatureSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $features = [
            ['name' => 'General Features'],
            ['name' => 'Alcohol'],
            ['name' => 'Meals Served'],
            ['name' => 'Music'],
            ['name' => 'Parking'],
            ['name' => 'Wi-Fi'],
            ['name' => 'Smoking'],
        ];
        DB::table('features')->insert($features);

        $features1 = [
            [ 'name' => 'Reservations','parent_id' => 1 ],
            [ 'name' => 'Waitlist','parent_id' => 1 ],
            [ 'name' => 'Hot and New','parent_id' => 1 ],
            [ 'name' => 'Discount','parent_id' => 1 ],
            [ 'name' => 'Gender-neutral','parent_id' => 1 ],
            [ 'name' => 'Open to All','parent_id' => 1 ],
            [ 'name' => 'Apple Pay','parent_id' => 1 ],
        ];
        DB::table('features')->insert($features1);


        $features2 = [
            ['name' => 'Full Bar', 'parent_id' => 2],
            ['name' => 'Beer & Wine Only', 'parent_id' => 2],
            ['name' => 'Good For Happy Hour', 'parent_id' => 2],
        ];
        DB::table('features')->insert($features2);

        $features3 =[
            ['name' => 'Breakfast', 'parent_id' => 3],
            ['name' => 'Brunch', 'parent_id' => 3],
            ['name' => 'Lunch', 'parent_id' => 3],
            ['name' => 'Dinner', 'parent_id' => 3],
            ['name' => 'Dessert', 'parent_id' => 3],
            ['name' => 'Late Night', 'parent_id' => 3],
        ];
        DB::table('features')->insert($features3);
    }
}
