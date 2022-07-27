<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class PabxUsersFactory extends Factory
{
    //  protected $model = PabxUsersFactory::class;
    /**
     
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name' => $this->faker->name,
            'user' => $this->faker->name,
            'password' => $this->faker->company,
            'created_by' => $this->faker->name
        ];
    }
}
