<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Party_Transaction>
 */
class PartyTransactionFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'party_id' => $this->faker->numberBetween(1,10),
            'request_from_user_id'=> $this->faker->numberBetween(1,10),
            'status' => $this->faker->randomElement(['approved', 'rejected', 'pending']),
        ];
    }
}
