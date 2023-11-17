<?php

namespace App\Services;

use App\Exceptions\GeneralJsonException;
use App\Http\Requests\StoreCharacterSavingThrowRequest;
use App\Http\Requests\UpdateCharacterSavingThrowRequest;
use App\Models\CharacterSavingThrow;

class CharacterSavingThrowService
{
    public function create(StoreCharacterSavingThrowRequest $request)
    {
        //
    }

    public function update(UpdateCharacterSavingThrowRequest $request, CharacterSavingThrow $characterSavingThrow)
    {
        $updated = $characterSavingThrow->update([
            'fortitude' => $request->fortitude ?? $characterSavingThrow->fortitude,
            'reflex' => $request->reflex ?? $characterSavingThrow->reflex,
            'will' => $request->will ?? $characterSavingThrow->will
        ]);

        if (!$updated) {
            throw new GeneralJsonException('Saving throws not updated');
        }

        return $updated;
    }

    public function destroy(CharacterSavingThrow $CharacterSavingThrow)
    {
        //
    }
}
