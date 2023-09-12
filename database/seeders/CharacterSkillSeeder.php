<?php

namespace Database\Seeders;

use App\Models\Character;
use App\Models\Skill;
use Database\Factories\Helpers\FactoryHelper;
use Illuminate\Database\Seeder;

class CharacterSkillSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Character $character)
    {
        $character->skills()->sync(FactoryHelper::getRandomModelId(Skill::class));
    }
}
