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
            ['name' => "Mediterranean"],
            ['name' => "Japanese"],
            ['name' => "Cafes"],
            ['name' => "Event Planning & Services"],
            ['name' => "Wine Bars"],
            ['name' => "Grocery"],
            ['name' => "Delis"],
            ['name' => "Food Delivery Services"],
            ['name' => "Bakeries"],
            ['name' => "Chinese"],
            ['name' => "Asian Fusion"],
            ['name' => "Chicken Wings"],
            ['name' => "Sports Bars"],
            ['name' => "Food Trucks"],
            ['name' => "Beer, Wine & Spirits"],
            ['name' => "Desserts"],
            ['name' => "Specialty Food"],
            ['name' => "Sushi Bars"],
            ['name' => "Vegan"],
            ['name' => "Barbeque"],
            ['name' => "Halal"],
            ['name' => "Venues & Event Spaces"],
            ['name' => "French"],
            ['name' => "Vietnamese"],
            ['name' => "Tacos"],
            ['name' => "Diners"],
            ['name' => "Breweries"],
            ['name' => "Noodles"],
            ['name' => "Convenience Stores"],
            ['name' => "Juice Bars & Smoothies"],
            ['name' => "Chicken Shop"],
            ['name' => "Korean"],
            ['name' => "Beer Bar"],
            ['name' => "Middle Eastern"],
            ['name' => "Steakhouses"],
            ['name' => "Lounges"],
            ['name' => "Greek"],
            ['name' => "Comfort Food"],
            ['name' => "Ice Cream & Frozen Yogurt"],
            ['name' => "Indian"],
            ['name' => "Tapas/Small Plates"],
            ['name' => "Thai"],
            ['name' => "Vegetarian"],
            ['name' => "Arts & Entertainment"],
            ['name' => "Hawaiian"],
            ['name' => "Gastropubs"],
            ['name' => "Hot Dogs"],
            ['name' => "Donuts"],
            ['name' => "Latin American"],
            ['name' => "Pubs"],
            ['name' => "Caterers"],
            ['name' => "Cheesesteaks"],
            ['name' => "Gluten-Free"],
            ['name' => "Dim Sum"],
            ['name' => "Southern"],
            ['name' => "Bubble Tea"],
            ['name' => "Cajun/Creole"],
            ['name' => "Soup"],
            ['name' => "Filipino"],
            ['name' => "Health Markets"],
            ['name' => "Ramen"],
            ['name' => "Organic Stores"],
        ];

        DB::table('categories')->insert($categories);
    }
}
