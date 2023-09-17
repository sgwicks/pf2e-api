<?php

namespace App\Services;

use App\Exceptions\GeneralJsonException;
use App\Http\Requests\StoreFeatRequest;
use App\Http\Requests\UpdateFeatRequest;
use App\Models\Feat;

class FeatService
{
    public function create(StoreFeatRequest $request)
    {
        $created = Feat::query()->create([
            'name' => $request->name,
            'description' => $request->description
        ]);

        return $created;
    }

    public function update(UpdateFeatRequest $request, Feat $feat)
    {
        $updated = Feat::query()->update([
            'name' => $request->name ?? $feat->name,
            'descripiton' => $request->description ?? $feat->description
        ]);

        if (!$updated) {
            throw new GeneralJsonException('Feat not updated');
        }

        return $updated;
    }
}
