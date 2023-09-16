<?php

namespace App\Services;

use App\Models\Character;
use App\Models\CharacterSkill;
use App\Models\Skill;

class CharacterService
{

    public function create($request)
    {
        $character = Character::query()->create([
            'user_id' => $request->user_id
        ]);

        Skill::query()->pluck('name')->each(function ($name) use ($character) {
            CharacterSkill::factory()->for($character)->state(['skill_name' => $name])->create();
        });

        return $character;
    }
    public function attachCharacterToUser()
    {

    }
}
