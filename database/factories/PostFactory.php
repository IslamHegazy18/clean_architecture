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
        $title = $this->faker->words(5, true);
        return [
            'title' => $title,
            'slug' => Str::slug($title),
            'body' => $this->faker->randomHtml(),
            'description' => $this->faker->sentences(2, true),
            'published'=>$this->faker->boolean(),
        ];
    }
}
