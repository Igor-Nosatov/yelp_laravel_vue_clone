<?php
declare (strict_types = 1);

namespace Database\Factories;

use App\Models\Business;
use App\Models\Photo;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Photo>
 */
class PhotoFactory extends Factory
{
    protected $model = Photo::class;
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
                'path' => $faker->imageUrl($width = 800, $height = 600),
                'business_id' => 1
            ];
    }
}




