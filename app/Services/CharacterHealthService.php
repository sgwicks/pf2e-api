<?php

namespace App\Services;

use App\Exceptions\GeneralJsonException;
use App\Http\Requests\StoreCharacterHealthRequest;
use App\Http\Requests\UpdateCharacterHealthRequest;
use App\Models\CharacterHealth;

class CharacterHealthService
{
    public function create(StoreCharacterHealthRequest $request)
    {
        //
    }

    public function update(UpdateCharacterHealthRequest $request, CharacterHealth $characterHealth)
    {
        $updated = $characterHealth->update([
            'max' => $request->max ?? $characterHealth->max,
            'current' => $request->current ?? $characterHealth->current,
            'temporary' => $request->temporary ?? $characterHealth->temporary,
            'dying' => $request->dying ?? $characterHealth->dying,
            'wounded' => $request->wounded ?? $characterHealth->wounded,
            'resistances' => $request->resistances ?? $characterHealth->resistances,
            'weaknesses' => $request->weaknesses ?? $characterHealth->weaknesses,
            'immunities' => $request->immunities ?? $characterHealth->immunities,
            'conditions' => $request->conditions ?? $characterHealth->conditions,
        ]);

        if (!$updated) {
            throw new GeneralJsonException('Health not updated');
        }

        return $updated;
    }

    public function destroy(CharacterHealth $CharacterHealth)
    {
        //
    }
}
