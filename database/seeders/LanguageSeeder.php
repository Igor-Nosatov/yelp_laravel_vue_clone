<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class LanguageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $languages = [
            ["name" => "Bulgarian"],
            ["name" => "Croatian"],
            ["name" => "Czech"],
            ["name" => "Danish"],
            ["name" => "Dutch"],
            ["name" => "English"],
            ["name" => "Estonian"],
            ["name" => "Finnish"],
            ["name" => "French"],
            ["name" => "German"],
            ["name" => "Greek"],
            ["name" => "Hungarian"],
            ["name" => "Irish"],
            ["name" => "Italian"],
            ["name" => "Latvian"],
            ["name" => "Lithuanian"],
            ["name" => "Maltese"],
            ["name" => "Polish"],
            ["name" => "Portuguese"],
            ["name" => "Romanian"],
            ["name" => "Slovak"],
            ["name" => "Slovenian"],
            ["name" => "Spanish"],
            ["name" => "Swedish"],
        ];

        DB::table('languages')->insert($languages);

    }
}
