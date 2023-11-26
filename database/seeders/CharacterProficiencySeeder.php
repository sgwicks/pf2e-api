<?php

namespace Database\Seeders;

use App\Models\Character;
use App\Models\CharacterProficiency;
use Illuminate\Database\Seeder;

class CharacterProficiencySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Character $character)
    {
        CharacterProficiency::factory()->for($character)->create();
    }
}
