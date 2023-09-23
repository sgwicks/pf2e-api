<?php

namespace App\Services;

use App\Exceptions\GeneralJsonException;
use App\Http\Requests\StoreAncestryRequest;
use App\Http\Requests\UpdateAncestryRequest;
use App\Models\Ancestry;

class AncestryService
{
    public function create(StoreAncestryRequest $request)
    {
        $ancestry = Ancestry::query()->create([
            'name' => $request->name,
            'description' => $request->description
        ]);

        return $ancestry;
    }

    public function update(UpdateAncestryRequest $request, Ancestry $ancestry)
    {
        $updated = $ancestry->update([
            'name' => $request->name ?? $ancestry->name,
            'description' => $request->description ?? $ancestry->description
        ]);

        if (!$updated) {
            throw new GeneralJsonException('Ancestry not updated');
        }

        return $updated;
    }

    public function destroy(Ancestry $ancestry)
    {
        $deleted = $ancestry->forceDelete();

        if (!$deleted) {
            throw new GeneralJsonException('Ancestry not deleted');
        }

        return $deleted;
    }
}
