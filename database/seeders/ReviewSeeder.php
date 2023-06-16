<?php
declare (strict_types = 1);

namespace Database\Seeders;

use App\Models\Business;
use App\Models\Review;
use Illuminate\Database\Seeder;

class ReviewSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $businessId = Business::pluck('id');

        foreach ($businessId as $id){
            for ($i = 1; $i <= 15; $i++) {
                Review::factory()->create([
                    'business_id' => $id,
                ]);
            }
        }
    }
}
