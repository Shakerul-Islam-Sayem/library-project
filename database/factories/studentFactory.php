<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class studentFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        // $gender=['male','female'];
        return [
            // 'name' => $this->faker->name,
            // 'dob' => $this->faker->dateTimeBetween('-80 years', '-18 years')->format('Y-d-m'),
            // 'gender' => $gender[random_int(0,1)],
            // 'email' => $this->faker->safeEmail,
            // 'phone' => $this->faker->phoneNumber,
            // 'address' => $this->faker->address,
            // 'department' => $this->faker->sentence(2)
        ];
    }
}
