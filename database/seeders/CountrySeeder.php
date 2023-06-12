<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CountrySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $countries = [
            ['name' => 'Canada'],
            ['name' => 'USA'],
            ['name' => 'Mexico'],

        ];

        DB::table('countries')->insert($countries);
    }
}
