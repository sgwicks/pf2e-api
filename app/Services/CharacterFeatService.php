<?php

namespace App\Services;

use App\Exceptions\GeneralJsonException;
use App\Http\Requests\StoreCharacterFeatRequest;
use App\Models\Character;
use App\Models\CharacterFeat;
use App\Models\Feat;

class CharacterFeatService
{
    /**
     * Add a feat to given character
     * Searches based on name or feat id
     */
    public function add(StoreCharacterFeatRequest $request, Character $character)
    {
        // Prefer using feat id if possible
        $feat = $request->feat_id ?
            Feat::query()->where('id', $request->feat_id)->firstOrFail() :
            Feat::query()->where('name', strtolower($request->name))->firstOrFail();

        // Character should not have the same feat twice
        $exists = $character->feats()->where('feat_id', $feat->id)->exists();
        if ($exists) {
            throw new GeneralJsonException('Character already has that feat');
        }

        $characterFeat = $character->feats()->create([
            'feat_id' => $feat->id,
            'chosen_level' => $request->chosen_level,
            'type' => $request->type
        ]);

        return $characterFeat;
    }

    public function remove(CharacterFeat $characterFeat)
    {
        $removed = $characterFeat->forceDelete();

        if (!$removed) {
            throw new GeneralJsonException('Feat not deleted');
        }

        return $removed;
    }
}
