<?php

namespace App\Services;

use App\Exceptions\GeneralJsonException;
use App\Http\Requests\StoreShieldRequest;
use App\Http\Requests\UpdateShieldRequest;
use App\Models\Shield;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;

class ShieldService
{
    /**
     * @param StoreShieldRequest $request
     * @return Builder|Model
     */
    public function create(StoreShieldRequest $request)
    {
        $created = Shield::query()->create([
            'name' => $request->name,
            'hardness' => $request->hardness ?? 0,
            'max_hp' => $request->max_hp ?? 0,
            'break_threshold' => $request->break_threshold ?? 0,
            'price' => $request->price ?? 0,
            'bulk' => $request->bulk ?? 0,
            'armour_class' => $request->armour_class ?? 0
        ]);

        return $created;
    }

    /**
     * @param UpdateShieldRequest $request
     * @param Shield $shield
     * @return bool
     * @throws GeneralJsonException
     */
    public function update(UpdateShieldRequest $request, Shield $shield): bool
    {
        $updated = $shield->update([
            'name' => $request->name ?? $shield->name,
            'hardness' => $request->hardness ?? $shield->hardness,
            'max_hp' => $request->max_hp ?? $shield->max_hp,
            'break_threshold' => $request->break_threshold ?? $shield->break_threshold,
            'price' => $request->price ?? $shield->price,
            'bulk' => $request->bulk ?? $shield->bulk,
            'armour_class' => $request->armour_class ?? $shield->armour_class
        ]);

        if (!$updated) {
            throw new GeneralJsonException('Shield not updated');
        }

        return $updated;
    }

    /**
     * @param Shield $shield
     * @return bool
     * @throws GeneralJsonException
     */
    public function destroy(Shield $shield): bool
    {
        $deleted = $shield->forceDelete();

        if (!$deleted) {
            throw new GeneralJsonException('Shield not deleted');
        }

        return $deleted;
    }
}
