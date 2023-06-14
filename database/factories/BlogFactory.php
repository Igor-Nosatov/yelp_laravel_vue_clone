<?php

namespace Database\Factories;

use App\Models\Topic;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Blog>
 */
class BlogFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $faker = \Faker\Factory::create();
        $faker->addProvider(new \Smknstd\FakerPicsumImages\FakerPicsumImagesProvider($faker));
        return [
            'title' => fake()->title,
            'image' => $faker->imageUrl($width = 800, $height = 600),
            'description' => fake()->paragraph,
            'topic_id' =>  Topic::inRandomOrder()->first()->id,
            'user_id' =>  User::latest()->first()->id,
        ];
    }
}
