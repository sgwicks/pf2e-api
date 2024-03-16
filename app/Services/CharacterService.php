<?php

namespace App\Services;

use App\Exceptions\GeneralJsonException;
use App\Http\Requests\UpdateCharacterRequest;
use App\Http\Requests\UpdateCharacterSkillRequest;
use App\Models\Character;
use App\Models\CharacterSkill;
use App\Models\CharacterSavingThrow;
use App\Models\CharacterMovement;
use App\Models\CharacterPerception;
use App\Models\CharacterHealth;
use App\Models\CharacterProficiency;
use App\Models\Skill;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class CharacterService
{

    public function create($user, $request)
    {
        $character = DB::transaction(function () use ($user, $request) {
            $character = $user->characters()->create([
                'name' => $request->name
            ]);

            CharacterSavingThrow::factory()->for($character)->create();
            CharacterMovement::factory()->for($character)->create();
            CharacterPerception::factory()->for($character)->create();
            CharacterHealth::factory()->for($character)->create();
            CharacterProficiency::factory()->for($character)->create();

            Skill::query()->pluck('id')->each(function ($id) use ($character) {
                CharacterSkill::factory()->for($character)->state(['skill_id' => $id])->create();
            });

            return $character;
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

    public function updateCharacterSkill(UpdateCharacterSkillRequest $request, Model $characterSkill)
    {
        $updated = $characterSkill->update([
            'proficiency' => $request->proficiency ?? $characterSkill->proficiency,
            'item' => $request->item ?? $characterSkill->item
        ]);

        if (!$updated) {
            throw new GeneralJsonException('Skill not updated');
        }

        return $updated;
    }
}
