<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class BackgroundFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name' => $this->faker->slug(),
            'description' => $this->faker->paragraph()
        ];
    }
}
