<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

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
            "title"=> $this->faker->title(),
            "userId"=> random_int(15,24),
            "see"=> random_int(5,578),
            "description"=> Str::random(10),
        ];
    }
}
