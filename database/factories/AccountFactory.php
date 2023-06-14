<?php
declare (strict_types = 1);

namespace Database\Factories;

use App\Models\Account;
use App\Models\Language;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Account>
 */
class AccountFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Account::class;
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        $faker = \Faker\Factory::create();
            $faker->addProvider(new \Smknstd\FakerPicsumImages\FakerPicsumImagesProvider($faker));
      return [
            'profile_image' => $faker->imageUrl($width = 800, $height = 600),
            'phone_number' => fake()->phoneNumber,
            'first_name' => fake()->firstName,
            'last_name' => fake()->lastName,
            'nickname' => fake()->userName,
            'gender' => fake()->randomElement(['Male', 'Female']),
            'headline' => fake()->sentence,
            'hometown' => fake()->city,
            'blog_website' => fake()->url,
            'second_favorite_website' => fake()->url,
            'last_great_book' => fake()->sentence,
            'first_concert' => fake()->sentence,
            'favorite_movie' => fake()->sentence,
            'current_crush' => fake()->name,
            'last_meal_earth' => fake()->paragraph,
            'secret' => fake()->paragraph,
            'recent_discovery' => fake()->paragraph,
            'when_not_yelping' => fake()->paragraph,
            'why_read_reviews' => fake()->paragraph,
            'loves' => fake()->paragraph,
            'find_me_in' => fake()->paragraph,
            'friend_visibility' => fake()->boolean,
            'bookmarks' => fake()->boolean,
            'direct_messages' => fake()->boolean,
            'ads' => fake()->boolean,
            'business_visibility' => fake()->randomElement(['profile', 'demographics', 'basic']),
            'user_id' =>  User::latest()->first()->id,
            'language_id' =>  Language::inRandomOrder()->first()->id,
            'created_at' => fake()->dateTimeBetween('-1 year', 'now'),
            'updated_at' => fake()->dateTimeBetween('-1 year', 'now'),
        ];
    }
}
