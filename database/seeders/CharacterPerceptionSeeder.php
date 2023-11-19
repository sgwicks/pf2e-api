<?php

namespace Database\Seeders;

use App\Models\Character;
use App\Models\CharacterPerception;
use Illuminate\Database\Seeder;

class CharacterPerceptionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Character $character)
    {
        CharacterPerception::factory()->for($character)->create();
    }
}
