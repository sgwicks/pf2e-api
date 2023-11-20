<?php

namespace App\Services;

use App\Exceptions\GeneralJsonException;
use App\Http\Requests\StoreCharacterMovementRequest;
use App\Http\Requests\UpdateCharacterMovementRequest;
use App\Models\CharacterMovement;

class CharacterMovementService
{
    public function create(StoreCharacterMovementRequest $request)
    {
        //
    }

    public function update(UpdateCharacterMovementRequest $request, CharacterMovement $characterMovement)
    {
        $updated = $characterMovement->update([
            'base' => $request->base ?? $characterMovement->base,
            'burrow' => $request->burrow ?? $characterMovement->burrow,
            'climb' => $request->climb ?? $characterMovement->climb,
            'fly' => $request->fly ?? $characterMovement->fly,
            'swim' => $request->swim ?? $characterMovement->swim
        ]);

        if (!$updated) {
            throw new GeneralJsonException('Movement not updated');
        }

        return $updated;
    }

    public function destroy(CharacterMovement $CharacterMovement)
    {
        //
    }
}
