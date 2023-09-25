<?php

namespace App\Services;

use App\Exceptions\GeneralJsonException;
use App\Http\Requests\StoreCharacterCharacterClassRequest;
use App\Http\Requests\UpdateCharacterCharacterClassRequest;
use App\Models\Character;
use App\Models\CharacterCharacterClass;
use App\Models\CharacterClass;
use Illuminate\Database\Eloquent\Model;

class CharacterCharacterClassService
{
    public function add(StoreCharacterCharacterClassRequest $request, Character $character)
    {
        // Prefer finding character class by id, but allow using name
        $characterClass = $request->class_id ?
            CharacterClass::query()->where('id', $request->class_id)->firstOrFail() :
            CharacterClass::query()->where('name', strtolower($request->class_name))->firstOrFail();

        // Character should not have the same character_class twice
        $exists = $character->characterClasses()->where('class_id', $characterClass->id)->exists();
        if ($exists) {
            throw new GeneralJsonException('Character already has that character class');
        }

        $characterCharacterClass = $character->characterClasses()->create([
            'class_id' => $characterClass->id,
            'level' => $request->level ?? 1
        ]);

        return $characterCharacterClass;
    }

    public function update(UpdateCharacterCharacterClassRequest $request, Model $characterClass)
    {
        $updated = $characterClass->update([
            'level' => $request->level ?? $characterClass->level
        ]);

        if (!$updated) {
            throw new GeneralJsonException('Character class not updated');
        }

        return $updated;
    }

    public function remove(Model $characterCharacterClass)
    {
        $removed = $characterCharacterClass->forceDelete();

        if (!$removed) {
            throw new GeneralJsonException('Character class not deleted');
        }

        return $removed;
    }
}
