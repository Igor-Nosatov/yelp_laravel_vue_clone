<?php
declare (strict_types = 1);

namespace Database\Seeders;

use App\Models\Amenity;
use App\Models\Category;
use App\Models\Business;
use App\Models\Feature;
use App\Models\Suggest;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BusinessSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Business::factory()->count(1000)->create();

        $businessId = Business::pluck('id');

        foreach ($businessId as $id){
                $business_category = [
                    'business_id' => $id,
                    'category_id' => Category::inRandomOrder()->first()->id,
                    'created_at' => fake()->dateTimeBetween('-1 year', 'now'),
                    'updated_at' => fake()->dateTimeBetween('-1 year', 'now'),
                ];
                DB::table('business_category')->insert($business_category);

                $featureId = Feature::inRandomOrder()->limit(10)->pluck('id');
                foreach($featureId as $feature){
                    $business_feature = [
                        'business_id' => $id,
                        'feature_id' => $feature,
                        'created_at' => fake()->dateTimeBetween('-1 year', 'now'),
                        'updated_at' => fake()->dateTimeBetween('-1 year', 'now'),
                    ];

                    DB::table('business_feature')->insert($business_feature);
                }

                $amenityId = Amenity::inRandomOrder()->limit(20)->pluck('id');
                foreach($amenityId as $amenity){
                    $amenity_business = [
                        'amenity_id' => $amenity,
                        'business_id' => $id,
                        'created_at' => fake()->dateTimeBetween('-1 year', 'now'),
                        'updated_at' => fake()->dateTimeBetween('-1 year', 'now'),
                    ];
                    DB::table('amenity_business')->insert($amenity_business);
                }

                $suggestId = Suggest::pluck('id');
                foreach($suggestId as $suggest){
                    $business_suggest = [
                        'amenity_id' => $suggest,
                        'business_id' => $id,
                        'created_at' => fake()->dateTimeBetween('-1 year', 'now'),
                        'updated_at' => fake()->dateTimeBetween('-1 year', 'now'),
                    ];
                    DB::table('business_suggest')->insert($business_suggest);
                }
        }
    }
}
