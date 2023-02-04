<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Shipment>
 */
class ShipmentFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'user_id' => rand(1,10),
            'customer_id' => rand(1,10),
            'payment_id' => rand(1,10),
            'form_address' => rand(1,10),
            'receiver_id' => rand(1,10),
        ];
    }
}
