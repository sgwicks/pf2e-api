<?php

namespace App\Services;

use App\Exceptions\GeneralJsonException;
use App\Http\Requests\ReplaceCharacterShieldRequest;
use App\Http\Requests\StoreCharacterShieldRequest;
use App\Http\Requests\UpdateCharacterShieldRequest;
use App\Models\Character;
use App\Models\CharacterShield;
use App\Models\Shield;

class CharacterShieldService
{
    /**
     * Add a shield to given character
     * Searches based on name or shield id
     */
    public function add(StoreCharacterShieldRequest $request, Character $character)
    {
        // Prefer using shield id if possible
        $shield = $request->shield_id ?
            Shield::query()->where('id', $request->shield_id)->firstOrFail() :
            Shield::query()->where('name', strtolower($request->name))->firstOrFail();

        $characterShield = $character->shield()->create([
            'shield_id' => $shield->id,
            'current_hp' => $shield->max_hp,
            'raised' => false
        ]);

        return $characterShield;
    }

    public function update(UpdateCharacterShieldRequest $request, CharacterShield $shield)
    {
        $updated = $shield->update();

        if (!$updated) {
            throw new GeneralJsonException('Shield not updated');
        }

        return $updated;
    }

    public function switch(ReplaceCharacterShieldRequest $request, CharacterShield $shield)
    {
        $updated = $shield->update([
            'shield_id' => $request->shield_id
        ]);

        if (!$updated) {
            throw new GeneralJsonException('Shield not updated');
        }

        return $updated;
    }

    public function remove(CharacterShield $characterShield)
    {
        $removed = $characterShield->forceDelete();

        if (!$removed) {
            throw new GeneralJsonException('Shield not deleted');
        }

        return $removed;
    }
}
