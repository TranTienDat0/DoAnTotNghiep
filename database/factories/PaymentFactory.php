<?php

namespace Database\Factories;

use App\Models\Payment;
use Illuminate\Database\Eloquent\Factories\Factory;

class PaymentFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $orderId = \App\Models\Order::pluck('id');
        $shippingId = \App\Models\Shipping::pluck('id');
        return [
            'method' => $this->faker->randomElement(array_keys(Payment::$methods)),                
            'status' => $this->faker->randomElement(array_keys(Payment::$status)),
            'order_id' => $orderId->random(),
            'shipping_id' => $shippingId->random(),
        ];
    }
}
