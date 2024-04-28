<?php

namespace App\Services;

use App\Exceptions\GeneralJsonException;
use App\Http\Requests\StoreCharacterNotesRequest;
use App\Http\Requests\UpdateCharacterNotesRequest;
use App\Models\CharacterNotes;
use App\Models\Character;


class CharacterNotesService
{
    public function create(StoreCharacterNotesRequest $request, Character $character)
    {
        $created = $character->notes()->create([
            'body' => $request->body
        ]);

        if (!$created) {
            throw new GeneralJsonException('Notes not created');
        }

        return $created;
    }

    public function update(UpdateCharacterNotesRequest $request, CharacterNotes $characterNotes)
    {
        $updated = $characterNotes->update([
            'body' => $request->body
        ]);

        if (!$updated) {
            throw new GeneralJsonException('Notes not updated');
        }

        return $updated;
    }
}
