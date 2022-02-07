<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class PostFactory extends Factory
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
            'meta_title' => $this->faker->title(),
            'meta_description' => $this->faker->text(),
            'meta_keywords' => $this->faker->text(),
            'published' => $this->faker->dateTime(),
            'category_id' => $this->faker->numberBetween(),
            'language_id' => $this->faker->numberBetween(1, 3),
        ];
    }
}
