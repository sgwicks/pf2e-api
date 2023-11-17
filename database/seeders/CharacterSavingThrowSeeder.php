<?php

namespace Database\Seeders;

use App\Models\Character;
use App\Models\CharacterSavingThrow;
use Illuminate\Database\Seeder;

class CharacterSavingThrowSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Character $character)
    {
        CharacterSavingThrow::factory()->for($character)->create();
    }
}
