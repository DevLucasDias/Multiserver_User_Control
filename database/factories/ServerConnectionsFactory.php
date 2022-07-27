<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class ServerConnectionsFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'organization_name' => $this->faker->company,
            'ipadress' => $this->faker->numberBetween($min = 19216801, $max = 1921681354),
            'created_by' => $this->faker->name
        ];
    }
}
