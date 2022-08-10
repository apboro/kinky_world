<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\User_Relation>
 */
class UserRelationFactory extends Factory
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
            'chat_with_user_id' => $this->faker->numberBetween(1,10),
            'favorite_user_id' => $this->faker->numberBetween(1,10),
            'seen_by_user_id' => $this->faker->numberBetween(1,10),
        ];
    }
}
