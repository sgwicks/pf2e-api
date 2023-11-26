<?php

namespace App\Services;

use App\Exceptions\GeneralJsonException;
use App\Http\Requests\StoreCharacterWeaponRequest;
use App\Http\Requests\UpdateCharacterWeaponRequest;
use App\Models\Character;
use App\Models\CharacterWeapon;
use App\Models\Weapon;

class CharacterWeaponService
{
    /**
     * Add a weapon to given character
     * Searches based on name or weapon id
     */
    public function add(StoreCharacterWeaponRequest $request, Character $character)
    {
        // Prefer using weapon id if possible
        $weapon = $request->weapon_id ?
            Weapon::query()->where('id', $request->weapon_id)->firstOrFail() :
            Weapon::query()->where('name', strtolower($request->name))->firstOrFail();

        // Character should not have the same weapon twice
        $exists = $character->weapons()->where('weapon_id', $weapon->id)->exists();
        if ($exists) {
            throw new GeneralJsonException('Character already has that weapon');
        }

        $characterWeapon = $character->weapons()->create([
            'weapon_id' => $weapon->id
        ]);

        return $characterWeapon;
    }

    public function switch(UpdateCharacterWeaponRequest $request, CharacterWeapon $weapon)
    {
        $updated = $weapon->update([
            'weapon_id' => $request->weapon_id
        ]);

        if (!$updated) {
            throw new GeneralJsonException('Weapon not updated');
        }

        return $updated;
    }

    public function remove(CharacterWeapon $characterWeapon)
    {
        $removed = $characterWeapon->forceDelete();

        if (!$removed) {
            throw new GeneralJsonException('Weapon not deleted');
        }

        return $removed;
    }
}
