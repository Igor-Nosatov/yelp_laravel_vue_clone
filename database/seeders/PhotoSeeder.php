<?php
declare (strict_types = 1);

namespace Database\Seeders;

use App\Models\Business;
use App\Models\Photo;
use Illuminate\Database\Seeder;

class PhotoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $businessId = Business::pluck('id');

        foreach ($businessId as $id){
            for ($i = 1; $i <= 8; $i++) {
                Photo::factory()->create([
                    'business_id' => $id,
                ]);
            }
        }
    }
}
