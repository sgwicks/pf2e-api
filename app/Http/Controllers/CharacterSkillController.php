<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreCharacterSkillRequest;
use App\Http\Requests\UpdateCharacterSkillRequest;
use App\Http\Resources\CharacterSkillResource;
use App\Models\Character;
use App\Models\CharacterSkill;
use App\Services\CharacterService;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\ResourceCollection;

class CharacterSkillController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return ResourceCollection
     */
    public function index(Character $character)
    {
        $characterSkills = $character->skills()->get();

        return CharacterSkillResource::collection($characterSkills);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\CharacterSkill  $characterSkill
     * @return CharacterSkillResource
     */
    public function show(Character $character, string $characterSkill)
    {
        $skill = $character->skills()->where('id', $characterSkill)->firstOrFail();
        return new CharacterSkillResource($skill);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateCharacterSkillRequest  $request
     * @param  \App\Models\Character  $character
     * @return CharacterSkillResource
     */
    public function update(UpdateCharacterSkillRequest $request, Character $character, string $characterSkill, CharacterService $service)
    {
        $skill = $character->skills()->where('id', $characterSkill)->firstOrFail();
        $service->updateCharacterSkill($request, $skill);

        return new CharacterSkillResource($skill);
    }
}
