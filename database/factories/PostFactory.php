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
        $tags=['Sport','Science','Fashion','Movies','Public'];
        return [
            'post_tag' => $this->faker->randomElement($tags),
            'post_title' => $this->faker->colorName(),
            'post_body' => $this->faker->paragraph(),
            'category_id' => $this->faker->randomElement([1,2,3]),
            'user_id' => $this->faker->randomElement([1,2,3]),
            'created_at'=>now(),
            'updated_at'=>now(),
        ];
    }
}
