<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Kinkbnb_Object>
 */
class KinkbnbObjectFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'user_id' => $this->faker->numberBetween(1,10),
            'name' => $this->faker->word(),
            'description' => $this->faker->text(),
            'photo_id' => $this->faker->numberBetween(1,10),
            'base_price' => $this->faker->randomFloat(2, 0, 100),
            'subscription_price' => $this->faker->randomFloat(2, 0, 100),
        ];
    }
}
