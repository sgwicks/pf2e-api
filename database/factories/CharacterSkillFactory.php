<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class CharacterSkillFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'proficiency' => 0,
            'item' => 0
        ];
    }
}
