<?php

namespace App\Services;

use App\Exceptions\GeneralJsonException;
use App\Http\Requests\UpdateCharacterRequest;
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

    /**
     * @param UpdateCharacterRequest
     */
    public function update(UpdateCharacterRequest $request, Character $character)
    {
        $updated = $character->update([
            'name' => $request->name ?? $character->name,
            'ancestry' => $request->ancestry ?? $character->ancestry,
            'heritage' => $request->heritage ?? $character->heritage,
            'background' => $request->background ?? $character->background,
            'size' => $request->size ?? $character->size,
            'alignment' => $request->alignment ?? $character->alignment,
            'traits' => $request->traits ?? $character->traits,
            'deity' => $request->deity ?? $character->deity,
            'strength' => $request->abilities['strength'] ?? $character->strength,
            'dexterity' => $request->abilities['dexterity'] ?? $character->dexterity,
            'constitution' => $request->abilities['constitution'] ?? $character->constitution,
            'intelligence' => $request->abilities['intelligence'] ?? $character->intelligence,
            'wisdom' => $request->abilities['wisdom'] ?? $character->wisdom,
            'charisma' => $request->abilities['charisma'] ?? $character->charisma
        ]);

        if (!$updated) {
            throw new GeneralJsonException('Character not updated');
        }

        return $updated;
    }

    public function destroy(Character $character)
    {
        $deleted = $character->forceDelete();

        if (!$deleted) {
            throw new GeneralJsonException('Character not deleted');
        }

        return $deleted;
    }
}
