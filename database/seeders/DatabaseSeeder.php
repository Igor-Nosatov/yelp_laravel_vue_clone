<?php
declare(strict_types=1);

namespace Database\Seeders;

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
        $this->call(UserSeeder::class);
        $this->call(AccountSeeder::class);
        $this->call(BusinessSeeder::class);
        $this->call(PhotoSeeder::class);
        $this->call(ReviewSeeder::class);
        $this->call(TopicSeeder::class);
        $this->call(BlogSeeder::class);
    }
}
