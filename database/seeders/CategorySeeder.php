<?php
declare (strict_types = 1);

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $categories = [
            ['name' => "Restaurants"],
            ['name' => "Food"],
            ['name' => "Nightlife"],
            ['name' => "Bars"],
            ['name' => "Burgers"],
            ['name' => "Breakfast & Brunch"],
            ['name' => "Sandwiches"],
            ['name' => "American (Traditional)"],
            ['name' => "American (New)"],
            ['name' => "Coffee & Tea"],
            ['name' => "Cocktail Bars"],
            ['name' => "Pizza"],
            ['name' => "Mexican"],
            ['name' => "Seafood"],
            ['name' => "Fast Food"],
            ['name' => "Italian"],
            ['name' => "Salad"],
        ];

        DB::table('categories')->insert($categories);
    }
}
