<?php

namespace App\Services;

use App\Exceptions\GeneralJsonException;
use App\Http\Requests\StoreCharacterPerceptionRequest;
use App\Http\Requests\UpdateCharacterPerceptionRequest;
use App\Models\CharacterPerception;

class CharacterPerceptionService
{
    public function create(StoreCharacterPerceptionRequest $request)
    {
        //
    }

    public function update(UpdateCharacterPerceptionRequest $request, CharacterPerception $characterPerception)
    {
        $updated = $characterPerception->update([
            'proficiency' => $request->proficiency ?? $characterPerception->proficiency,
            'item' => $request->item ?? $characterPerception->item,
            'senses' => $request->senses ?? $characterPerception->senses,
        ]);

        if (!$updated) {
            throw new GeneralJsonException('Perception not updated');
        }

        return $updated;
    }

    public function destroy(CharacterPerception $CharacterPerception)
    {
        //
    }
}
