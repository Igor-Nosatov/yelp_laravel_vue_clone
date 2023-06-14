<?php
declare (strict_types = 1);

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Business;
/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Business>
 */
class BusinessFactory extends Factory
{
    protected $model = Business::class;
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => fake()->company,
            'price_level' => fake()->randomElement(['low', 'average','high', 'luxury']),
            'address' => fake()->address,
            'city' => fake()->city,
            'state' => fake()->state,
            'postal_code' => fake()->postcode,
            'country' => fake()->country,
            'phone' => fake()->phoneNumber,
            'email' => fake()->email,
            'website' => fake()->url,
            'description' => fake()->paragraph,
            'latitude' => fake()->latitude,
            'longitude' => fake()->longitude,
        ];
    }

}
