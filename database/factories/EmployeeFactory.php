<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Employee>
 */
class EmployeeFactory extends Factory
{

    public function definition(): array
    {
        return [
            'firstname' => $this->faker->firstName(),
            'middle_initial' => strtoupper($this->faker->randomLetter()),
            'lastname' => $this->faker->lastName(),
            'role' => $this->faker->randomElement(['Stylish', 'Massage&Spa', 'Cleaner', 'Manager']),
            'commission_rate' => $this->faker->randomFloat(2, 0, 100),
            'date_hired' => $this->faker->date(),
            'created_at' => now(),
            'updated_at' => now(),
        ];
    }
}
