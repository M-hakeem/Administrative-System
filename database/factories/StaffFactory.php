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
            'email' => $this->faker->unique()->safeEmail(),
            'phone' => $this->faker->phoneNumber(),
            'department' => 'Human Resource',
            'position' => 'web developer',
            'category' => 'permanent',
            'status' => 'Active',
            'code' => 'HIS-' .rand(100000,999999)

        ];
    }
}
