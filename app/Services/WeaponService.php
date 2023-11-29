<?php

namespace App\Services;

use App\Exceptions\GeneralJsonException;
use App\Http\Requests\StoreWeaponRequest;
use App\Http\Requests\UpdateWeaponRequest;
use App\Models\Weapon;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;

class WeaponService
{
    /**
     * @param StoreWeaponRequest $request
     * @return Builder|Model
     */
    public function create(StoreWeaponRequest $request)
    {
        $created = Weapon::query()->create([
            'name' => $request->name,
            'category' => $request->category,
            'hardness' => $request->hardness ?? 0,
            'max_hp' => $request->max_hp ?? 0,
            'break_threshold' => $request->break_threshold ?? 0,
            'price' => $request->price ?? 0,
            'weapon_class' => $request->weapon_class ?? 0,
            'dex_cap' => $request->dex_cap ?? null,
            'check_penalty' => $request->check_penalty ?? 0,
            'speed_penalty' => $request->speed_penalty ?? 0,
            'strength' => $request->strength ?? 0,
            'bulk' => $request->bulk ?? 0,
            'group' => $request->group ?? null,
            'traits' => $request->traits ?? [],
            'range' => $request->range ?? 5,
            'damage_die_type' => $request->damage_die_type ?? 4,
            'damage_die_amount' => $request->damage_die_amount ?? 1,
            'damage_type' => $request->damage_type ?? 'B',
            'reload' => $request->reload ?? 0,
            'hands' => $request->hands ?? 1,
        ]);

        return $created;
    }

    /**
     * @param UpdateWeaponRequest $request
     * @param Weapon $weapon
     * @return bool
     * @throws GeneralJsonException
     */
    public function update(UpdateWeaponRequest $request, Weapon $weapon): bool
    {
        $updated = $weapon->update([
            'name' => $request->name ?? $weapon->name,
            'category' => $request->category ?? $weapon->category,
            'hardness' => $request->hardness ?? $weapon->hardness,
            'max_hp' => $request->max_hp ?? $weapon->max_hp,
            'break_threshold' => $request->break_threshold ?? $weapon->break_threshold,
            'price' => $request->price ?? $weapon->price,
            'weapon_class' => $request->weapon_class ?? $weapon->weapon_class,
            'dex_cap' => $request->dex_cap ?? $weapon->dex_cap,
            'check_penalty' => $request->check_penalty ?? $weapon->check_penalty,
            'speed_penalty' => $request->speed_penalty ?? $weapon->speed_penalty,
            'strength' => $request->strength ?? $weapon->strength,
            'bulk' => $request->bulk ?? $weapon->bulk,
            'group' => $request->group ?? $weapon->group,
            'traits' => $request->traits ?? $weapon->traits,
            'range' => $request->range ?? $weapon->range,
            'damage_die_type' => $request->damage_die_type ?? $weapon->damage_die_type,
            'damage_die_amount' => $request->damage_die_amount ?? $weapon->damage_die_amount,
            'damage_type' => $request->damage_type ?? $weapon->damage_type,
            'reload' => $request->reload ?? $weapon->reload,
            'hands' => $request->hands ?? $weapon->hands,
        ]);

        if (!$updated) {
            throw new GeneralJsonException('Weapon not updated');
        }

        return $updated;
    }

    /**
     * @param Weapon $weapon
     * @return bool
     * @throws GeneralJsonException
     */
    public function destroy(Weapon $weapon): bool
    {
        $deleted = $weapon->forceDelete();

        if (!$deleted) {
            throw new GeneralJsonException('Weapon not deleted');
        }

        return $deleted;
    }
}
