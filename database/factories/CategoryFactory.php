<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class CategoryFactory extends Factory
{

    public function definition(): array
    {

        return [
          'cat_title' => fake()->realText(10),
           'cat_description' => fake()->realText(),
           'cat_slug' => fake()->slug(),
        ];
    }
}
