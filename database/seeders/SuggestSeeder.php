<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SuggestSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $suggests = [
            ['name' => 'Offers Delivery'],
            ['name' => 'Reservations'],
            ['name' => 'Offers Takeout'],
            ['name' => 'Good for Dinner'],
            ['name' => 'Hot and New'],
        ];

        DB::table('suggests')->insert($suggests);
    }
}
