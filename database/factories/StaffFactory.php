<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class StaffFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'fname' => $this->faker->name(),
            'lname' => $this->faker->name(),
            'gender' => 'male',
            'department' => $this->faker->text(),
            'position' => 'web developer',
            'category' => 'permanent',
            'status' => 'Active',
            'code' => rand(100000,999999)

        ];
    }
}
