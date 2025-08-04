<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Service>
 */
class ServiceFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => $this->faker->word(),
            'amount' => $this->faker->numberBetween(50, 5000),
            'category' => $this->faker->randomElement(['Hair', 'Nails', 'Skin', 'Massage', 'Spa', 'facial']),
        ];
    }
}
