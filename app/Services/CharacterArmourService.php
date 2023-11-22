<?php

namespace App\Services;

use App\Exceptions\GeneralJsonException;
use App\Http\Requests\StoreCharacterArmourRequest;
use App\Models\Character;
use App\Models\CharacterArmour;
use App\Models\Armour;

class CharacterArmourService
{
    /**
     * Add a armour to given character
     * Searches based on name or armour id
     */
    public function add(StoreCharacterArmourRequest $request, Character $character)
    {
        // Prefer using armour id if possible
        $armour = $request->armour_id ?
            Armour::query()->where('id', $request->armour_id)->firstOrFail() :
            Armour::query()->where('name', strtolower($request->name))->firstOrFail();

        // Character should not have the same armour twice
        $exists = $character->armours()->where('armour_id', $armour->id)->exists();
        if ($exists) {
            throw new GeneralJsonException('Character already has that armour');
        }

        $characterArmour = $character->armours()->create([
            'armour_id' => $armour->id
        ]);

        return $characterArmour;
    }

    public function remove(CharacterArmour $characterArmour)
    {
        $removed = $characterArmour->forceDelete();

        if (!$removed) {
            throw new GeneralJsonException('Armour not deleted');
        }

        return $removed;
    }
}
