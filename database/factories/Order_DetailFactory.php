<?php

namespace Database\Factories;

use App\Models\Order;
use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Products;

class Order_DetailFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        //$productName = \App\Models\Products::pluck('name')->where($productId);
        $orderId = Order::pluck('id');
        $productId = Products::pluck('id');
        return [
            'price' => $this->faker->numberBetween($min = 10000, $max = 500000),
            'order_id' => $orderId->random(),
            'products_id' => $productId->random(),
            'quantity' => $this->faker->numberBetween($min = 1, $max = 500)
        ];
    }
}
