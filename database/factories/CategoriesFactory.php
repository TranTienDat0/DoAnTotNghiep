<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class CategoriesFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $parentCategoriesId = \App\Models\Parent_categories::pluck('id');
        return [
            'name' => $this->faker->text(),
            'parent_categories_id' => $parentCategoriesId->random(),
        ];
    }
}
