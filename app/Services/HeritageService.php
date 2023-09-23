<?php

namespace App\Services;

use App\Exceptions\GeneralJsonException;
use App\Http\Requests\StoreHeritageRequest;
use App\Http\Requests\UpdateHeritageRequest;
use App\Models\Heritage;

class HeritageService
{
    public function create(StoreHeritageRequest $request)
    {
        $heritage = Heritage::query()->create([
            'name' => $request->name,
            'description' => $request->description
        ]);

        return $heritage;
    }

    public function update(UpdateHeritageRequest $request, Heritage $heritage)
    {
        $updated = $heritage->update([
            'name' => $request->name ?? $heritage->name,
            'description' => $request->description ?? $heritage->description
        ]);

        if (!$updated) {
            throw new GeneralJsonException('Heritage not updated');
        }

        return $updated;
    }

    public function destroy(Heritage $heritage)
    {
        $deleted = $heritage->forceDelete();

        if (!$deleted) {
            throw new GeneralJsonException('Heritage not deleted');
        }

        return $deleted;
    }
}
