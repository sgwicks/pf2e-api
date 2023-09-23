<?php

namespace App\Services;

use App\Exceptions\GeneralJsonException;
use App\Http\Requests\StoreBackgroundRequest;
use App\Http\Requests\UpdateBackgroundRequest;
use App\Models\Background;

class BackgroundService
{
    public function create(StoreBackgroundRequest $request)
    {
        $background = Background::query()->create([
            'name' => $request->name,
            'description' => $request->description
        ]);

        return $background;
    }

    public function update(UpdateBackgroundRequest $request, Background $background)
    {
        $updated = $background->update([
            'name' => $request->name ?? $background->name,
            'description' => $request->description ?? $background->description
        ]);

        if (!$updated) {
            throw new GeneralJsonException('Background not updated');
        }

        return $updated;
    }

    public function destroy(Background $background)
    {
        $deleted = $background->forceDelete();

        if (!$deleted) {
            throw new GeneralJsonException('Background not deleted');
        }

        return $deleted;
    }
}
