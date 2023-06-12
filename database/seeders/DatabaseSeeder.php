<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call(RoleSeeder::class);
        $this->call(AmenitySeeder::class);
        $this->call(CategorySeeder::class);
        $this->call(FeatureSeeder::class);
        $this->call(LanguageSeeder::class);
        $this->call(CountrySeeder::class);


    }
}
