<?php

namespace App\Services;

use App\Exceptions\GeneralJsonException;
use App\Http\Requests\StoreCharacterProficiencyRequest;
use App\Http\Requests\UpdateCharacterProficiencyRequest;
use App\Models\CharacterProficiency;

class CharacterProficiencyService
{
    public function create(StoreCharacterProficiencyRequest $request)
    {
        //
    }

    public function update(UpdateCharacterProficiencyRequest $request, CharacterProficiency $characterProficiency)
    {
        $updated = $characterProficiency->update([
            'unarmoured' => $request->unarmoured ?? $characterProficiency->unarmoured,
            'light' => $request->light ?? $characterProficiency->light,
            'medium' => $request->medium ?? $characterProficiency->medium,
            'heavy' => $request->heavy ?? $characterProficiency->heavy,
            'unarmed' => $request->unarmed ?? $characterProficiency->unarmed,
            'simple' => $request->simple ?? $characterProficiency->simple,
            'martial' => $request->martial ?? $characterProficiency->martial,
        ]);

        if (!$updated) {
            throw new GeneralJsonException('Proficiency not updated');
        }

        return $updated;
    }

    public function destroy(CharacterProficiency $CharacterProficiency)
    {
        //
    }
}
