<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class CategoryFactory extends Factory
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
            'category_name'=>$this->faker->randomElement($tags),
            'category_image'=>"https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcT37evpuessoBlqTCO6fleW5uaFHQAz9qXS8FoHh9gyfjyE95n9NkcwKMC5GiPPEkpKGLo&usqp=CAU",
            'category_description'=>$this->faker->paragraph(),
            'created_at'=>now(),
            'updated_at'=>now(),
        ];
    }
}
