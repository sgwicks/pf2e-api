<?php

namespace App\Services;

use App\Exceptions\GeneralJsonException;
use App\Http\Requests\StoreFeatRequest;
use App\Http\Requests\UpdateFeatRequest;
use App\Models\Feat;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;

class FeatService
{
    /**
     * @param StoreFeatRequest $request
     * @return Builder|Model
     */
    public function create(StoreFeatRequest $request)
    {
        $created = Feat::query()->create([
            'name' => $request->name,
            'description' => $request->description
        ]);

        return $created;
    }

    /**
     * @param UpdateFeatRequest $request
     * @param Feat $feat
     * @return bool
     * @throws GeneralJsonException
     */
    public function update(UpdateFeatRequest $request, Feat $feat): bool
    {
        $updated = $feat->update([
            'name' => $request->name ?? $feat->name,
            'description' => $request->description ?? $feat->description
        ]);

        if (!$updated) {
            throw new GeneralJsonException('Feat not updated');
        }

        return $updated;
    }

    /**
     * @param Feat $feat
     * @return bool
     * @throws GeneralJsonException
     */
    public function destroy(Feat $feat): bool
    {
        $deleted = $feat->forceDelete();

        if (!$deleted) {
            throw new GeneralJsonException('Feat not deleted');
        }

        return $deleted;
    }
}
