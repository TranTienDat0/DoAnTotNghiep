<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class ProductsFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $categoriesId = \App\Models\Categories::pluck('id');
        return [
            'name' => $this->faker->title(),
            'image' => url(sprintf(
                'avatar/%s.%s',
                $this->faker->uuid(),
                $this->faker->randomElement(['jpg', 'jpeg', 'png'])
            )),
            'price' => $this->faker->numberBetween($min = 10000, $max = 500000),
            'date_of_manufacture' => $this->faker->date(),
            'expiry' => $this->faker->date(),
            'quantity' => $this->faker->numberBetween($min = 1, $max = 500),
            'categories_id' => $categoriesId->random(),
        ];
    }
}
