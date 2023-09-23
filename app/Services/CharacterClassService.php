<?php

namespace App\Services;

use App\Exceptions\GeneralJsonException;
use App\Http\Requests\StoreCharacterClassRequest;
use App\Http\Requests\UpdateCharacterClassRequest;
use App\Models\CharacterClass;

class CharacterClassService
{
    public function create(StoreCharacterClassRequest $request)
    {
        $characterClass = CharacterClass::query()->create([
            'name' => $request->name,
            'key_ability' => $request->key_ability,
            'hit_points' => $request->hit_points
        ]);

        return $characterClass;
    }

    public function update(UpdateCharacterClassRequest $request, CharacterClass $characterClass)
    {
        $updated = $characterClass->update([
            'name' => $request->name ?? $characterClass->name,
            'key_ability' => $request->key_ability ?? $characterClass->key_ability,
            'hit_points' => $request->hit_points ?? $characterClass->hit_points
        ]);

        if (!$updated) {
            throw new GeneralJsonException('Character class not updated');
        }

        return $updated;
    }

    public function destroy(CharacterClass $characterClass)
    {
        $deleted = $characterClass->forceDelete();

        if (!$deleted) {
            throw new GeneralJsonException('Character class not deleted');
        }

        return $deleted;
    }
}
