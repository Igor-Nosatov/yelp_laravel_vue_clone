<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TopicSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $topics = [
            ['name' => 'Best of Yelp'],
            ['name' => 'Trust & Safety'],
            ['name' => 'Yelp Products'],
            ['name' => 'Diversity & Inclusion'],
            ['name' => 'Culture at Yelp'],
            ['name' => 'Economic Data'],
            ['name' => 'Behind the Business'],
            ['name' => 'Data Trends'],
        ];

        DB::table('topics')->insert($topics);
    }
}
