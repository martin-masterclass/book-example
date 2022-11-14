<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Customer>
 */
class CustomerFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'company_name' => $this->faker->company,
            'contact_name' => $this->faker->name,
            'phone' => $this->faker->phoneNumber,
            'city' => $this->faker->city,
            'country' => $this->faker->country,
            'remarks' => $this->faker->realText(100),
        ];
    }
}
