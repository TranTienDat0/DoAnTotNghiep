<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\User;
use Illuminate\Support\Str;

class UserFactory extends Factory
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
            //'password' => md5($this->faker->password),
            'gender' => $this->faker->randomElement(array_keys(User::$genders)),
            'date_of_birth' => $this->faker->date(),
            'email_address' => $this->faker->unique()->safeEmail(),
            'phone' => $this->faker->numerify('0#########'),                   
            'role' => $this->faker->randomElement(array_keys(User::$roles))
        ];
    }

    /**
     * Indicate that the model's email address should be unverified.
     *
     * @return \Illuminate\Database\Eloquent\Factories\Factory
     */
    public function unverified()
    {
        return $this->state(function (array $attributes) {
            return [
                'email_verified_at' => null,
            ];
        });
    }
}
