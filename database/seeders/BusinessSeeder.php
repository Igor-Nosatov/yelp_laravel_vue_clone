<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Business;
class BusinessSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Business::factory()->count(35)->create();
    }
}
