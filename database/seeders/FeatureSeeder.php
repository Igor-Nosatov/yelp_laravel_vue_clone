<?php

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
        DB::table('categories')->insert($features);

        $features1 = [
            [ 'name' => 'Reservations','parent_id' => 1 ],
            [ 'name' => 'Waitlist','parent_id' => 1 ],
            [ 'name' => 'Open At: 12:11 PM','parent_id' => 1 ],
            [ 'name' => 'Open Now 10:55 PM','parent_id' => 1 ],
            [ 'name' => 'Takes Reservations','parent_id' => 1 ],
            [ 'name' => 'Accepts Credit Cards','parent_id' => 1 ],
            [ 'name' => 'Accepts Cryptocurrency','parent_id' => 1 ],
            [ 'name' => 'Offers Delivery','parent_id' => 1 ],
            [ 'name' => 'Outdoor Seating','parent_id' => 1 ],
            [ 'name' => 'Good for Kids','parent_id' => 1 ],
            [ 'name' => 'Good for Groups','parent_id' => 1 ],
            [ 'name' => 'Waiter Service','parent_id' => 1 ],
            [ 'name' => 'Offers Takeout','parent_id' => 1 ],
            [ 'name' => 'Wheelchair Accessible','parent_id' => 1 ],
            [ 'name' => 'Coat Check','parent_id' => 1 ],
            [ 'name' => 'Has TV','parent_id' => 1 ],
            [ 'name' => 'Dogs Allowed','parent_id' => 1 ],
            [ 'name' => 'Liked by Vegetarians','parent_id' => 1 ],
            [ 'name' => 'Liked by 20-somethings','parent_id' => 1 ],
            [ 'name' => 'Liked by 30-somethings','parent_id' => 1 ],
            [ 'name' => 'Liked by 40-somethings','parent_id' => 1 ],
            [ 'name' => 'Hot and New','parent_id' => 1 ],
            [ 'name' => 'Offers Military Discount','parent_id' => 1 ],
            [ 'name' => 'Gender-neutral restrooms','parent_id' => 1 ],
            [ 'name' => 'Open to All','parent_id' => 1 ],
            [ 'name' => 'Accepts Apple Pay','parent_id' => 1 ],
            [ 'name' => 'Proof of vaccination required','parent_id' => 1 ],
            [ 'name' => 'All staff fully vaccinated','parent_id' => 1 ],
        ];
        DB::table('categories')->insert($features1);


        $features2 = [
            ['name' => 'Full Bar', 'parent_id' => 2],
            ['name' => 'Beer & Wine Only', 'parent_id' => 2],
            ['name' => 'Good For Happy Hour', 'parent_id' => 2],
        ];
        DB::table('categories')->insert($features2);

        $features3 =[
            ['name' => 'Breakfast', 'parent_id' => 3],
            ['name' => 'Brunch', 'parent_id' => 3],
            ['name' => 'Lunch', 'parent_id' => 3],
            ['name' => 'Dinner', 'parent_id' => 3],
            ['name' => 'Dessert', 'parent_id' => 3],
            ['name' => 'Late Night', 'parent_id' => 3],
        ];
        DB::table('categories')->insert($features3);
    }
}
