<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Employee>
 */
class EmployeeFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'user_id' => rand(1,20),
            'phone' => fake()->e164PhoneNumber(),
            'nid' => fake()->numberBetween(),
            'branch_id' => rand(1,20),
            'employee_type' => rand(0,1),
            'employee_status' => rand(0,3),
            'address' => fake()->address()
        ];
    }
}
