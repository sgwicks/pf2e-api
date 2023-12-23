<?php

namespace App\Services;

use App\Exceptions\GeneralJsonException;
use App\Http\Requests\StoreCharacterActionRequest;
use App\Http\Requests\UpdateCharacterActionRequest;
use App\Models\Character;
use App\Models\CharacterAction;
use Illuminate\Database\Eloquent\Model;

class CharacterActionService
{
    public function create(StoreCharacterActionRequest $request, Character $character)
    {
        $action = $character->actions()->create([
            'name' => $request->name,
            'description' => $request->description,
            'action' => $request->action ?? 'single',
            'traits' => $request->traits,
            'trigger' => $request->trigger,
            'source_book' => $request->source_book,
            'source_page' => $request->source_page,
            'is_spell' => $request->is_spell ?? false,
            'components' => $request->components,
        ]);

        return $action;
    }

    public function update(UpdateCharacterActionRequest $request, CharacterAction $characterAction)
    {
        $updated = $characterAction->update([
            'name' => $request->name ?? $characterAction->name,
            'description' => $request->description  ?? $characterAction->description,
            'action' => $request->action ?? $characterAction->action,
            'traits' => $request->traits  ?? $characterAction->traits,
            'trigger' => $request->trigger ?? $characterAction->trigger,
            'source_book' => $request->source_book  ?? $characterAction->source_book,
            'source_page' => $request->source_page  ?? $characterAction->source_page,
            'is_spell' => $request->is_spell  ?? $characterAction->is_spell,
            'components' => $request->components  ?? $characterAction->components,
        ]);

        if (!$updated) {
            throw new GeneralJsonException('Action not updated');
        }

        return $updated;
    }

    public function destroy(CharacterAction $characterAction)
    {
        $deleted = $characterAction->forceDelete();

        if (!$deleted) {
            throw new GeneralJsonException('Action not removed');
        }

        return $deleted;
    }
}
