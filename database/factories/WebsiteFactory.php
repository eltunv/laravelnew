<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class WebsiteFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name' => $this->faker->name,
            'link' => $this->faker->url(),
            'api_token' => $this->faker->password(20),
            'status' => $this->faker->boolean(),
        ];
    }
}
