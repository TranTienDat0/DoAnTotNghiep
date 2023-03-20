<?php

namespace Database\Factories;

use App\Models\User;
use App\Models\Shipping;
use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Order;

class OrderFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $userId = User::pluck('id');
        $shippingId = Shipping::pluck('id');
        return [
            'date' => $this->faker->date(),
            'total' => $this->faker->numberBetween($min = 10000, $max = 500000),
            'status' => $this->faker->randomElement(array_keys(Order::$status)),
            'user_id' => $userId->random(),
            'shipping_id' => $shippingId->random(),
        ];
    }
}
