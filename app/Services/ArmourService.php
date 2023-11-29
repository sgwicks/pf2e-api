<?php

namespace App\Services;

use App\Exceptions\GeneralJsonException;
use App\Http\Requests\StoreArmourRequest;
use App\Http\Requests\UpdateArmourRequest;
use App\Models\Armour;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;

class ArmourService
{
    /**
     * @param StoreArmourRequest $request
     * @return Builder|Model
     */
    public function create(StoreArmourRequest $request)
    {
        $created = Armour::query()->create([
            'name' => $request->name,
            'category' => $request->category,
            'price' => $request->price ?? 0,
            'armour_class' => $request->armour_class ?? 0,
            'dex_cap' => $request->dex_cap ?? null,
            'check_penalty' => $request->check_penalty ?? 0,
            'speed_penalty' => $request->speed_penalty ?? 0,
            'strength' => $request->strength ?? 0,
            'bulk' => $request->bulk ?? 0,
            'group' => $request->group ?? null,
            'traits' => $request->traits ?? []
        ]);

        return $created;
    }

    /**
     * @param UpdateArmourRequest $request
     * @param Armour $armour
     * @return bool
     * @throws GeneralJsonException
     */
    public function update(UpdateArmourRequest $request, Armour $armour): bool
    {
        $updated = $armour->update([
            'name' => $request->name ?? $armour->name,
            'category' => $request->category ?? $armour->category,
            'price' => $request->price ?? $armour->price,
            'armour_class' => $request->armour_class ?? $armour->armour_class,
            'dex_cap' => $request->dex_cap ?? $armour->dex_cap,
            'check_penalty' => $request->check_penalty ?? $armour->check_penalty,
            'speed_penalty' => $request->speed_penalty ?? $armour->speed_penalty,
            'strength' => $request->strength ?? $armour->strength,
            'bulk' => $request->bulk ?? $armour->bulk,
            'group' => $request->group ?? $armour->group,
            'traits' => $request->traits ?? $armour->traits
        ]);

        if (!$updated) {
            throw new GeneralJsonException('Armour not updated');
        }

        return $updated;
    }

    /**
     * @param Armour $armour
     * @return bool
     * @throws GeneralJsonException
     */
    public function destroy(Armour $armour): bool
    {
        $deleted = $armour->forceDelete();

        if (!$deleted) {
            throw new GeneralJsonException('Armour not deleted');
        }

        return $deleted;
    }
}
