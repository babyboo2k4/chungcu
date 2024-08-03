<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Apartment>
 */
class ApartmentFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => $this->faker->words(3, true),
            'address' => $this->faker->address,
            'price_per_sqm' => $this->faker->numberBetween(2000, 10000),
            'info' => $this->faker->sentence,
            'details' => $this->faker->paragraph,
            'image_url' => $this->faker->imageUrl,
            'status' => $this->faker->numberBetween(1, 3),
        ];
    }
}
