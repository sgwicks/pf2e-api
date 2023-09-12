<?php

namespace Database\Seeders;

use App\Models\Character;
use App\Models\CharacterClass;
use Database\Factories\Helpers\FactoryHelper;
use Illuminate\Database\Seeder;

class CharacterCharacterClassSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Character $character)
    {
        $character->characterClasses()->sync(FactoryHelper::getRandomModelId(CharacterClass::class));
    }
}
