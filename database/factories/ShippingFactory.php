<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class ShippingFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name' => $this->faker->name(),
            'address' => $this->faker->address(),
            'email_address' => $this->faker->unique()->safeEmail(),
            'phone' => $this->faker->numerify('0#########'),
            'note' => 'Đóng hàng cẩn thận',
        ];
    }
}
