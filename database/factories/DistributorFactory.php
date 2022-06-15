<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class DistributorFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'code' => 'HID-'.rand(100000,999999),
            'title' => $this->faker->title(),
            'fname' => $this->faker->name(),
            'lname' => $this->faker->name(),
            'email' => $this->faker->unique()->safeEmail(),
            'phone' => $this->faker->phoneNumber(),
            'nationality' => $this->faker->country(),
            'state' => $this->faker->city(),
            'lga' => $this->faker->city(),
            'bname' => 'dreamlabs nig ltd',
            'badd' => $this->faker->address(),
            'area' => 'abuja',
            'tin' => '998877',
            'status' => 'Active',
        ];
    }
}
