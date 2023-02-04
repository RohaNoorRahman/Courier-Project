<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Vehicle>
 */
class VehicleFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'vehicle_type' => rand(0,2),
            'employee_id' => rand(1,20),
            'branch_id' => rand(1,20),
            'vehicle_number' => fake()->numberBetween(),
        ];
    }
}
