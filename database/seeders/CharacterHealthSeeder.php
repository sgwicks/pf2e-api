<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Character;
use App\Models\CharacterHealth;

class CharacterHealthSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Character $character)
    {
        CharacterHealth::factory()->for($character)->create();
    }
}
