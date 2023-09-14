<?php

namespace Database\Seeders;

use App\Models\Character;
use App\Models\CharacterSkill;
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
        Skill::query()->pluck('name')->each(function ($name) use ($character) {
            CharacterSkill::factory()->for($character)->state(['skill_name' => $name])->create();
        });

    }
}
