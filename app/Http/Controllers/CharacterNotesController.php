<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreCharacterNotesRequest;
use App\Http\Requests\UpdateCharacterNotesRequest;
use App\Http\Resources\CharacterNotesResource;
use App\Models\CharacterNotes;
use App\Models\Character;
use App\Services\CharacterNotesService;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Resources\Json\ResourceCollection;

class CharacterNotesController extends Controller
{
    /**
     * Store a newly created resource in storage.
     *
     * @param  StoreCharacterNotesRequest  $request
     * @param  Character $character
     * @return CharacterNotesResource
     */
    public function store(StoreCharacterNotesRequest $request, Character $character, CharacterNotesService $service)
    {
        $notes = $service->create($request, $character);

        return new CharacterNotesResource($notes);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Character  $character
     * @return CharacterNotesResource
     */
    public function show(Character $character)
    {
        $notes = $character->notes;

        return new CharacterNotesResource($notes);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateCharacterNotesRequest  $request
     * @param  \App\Models\Character  $character
     * @param  CharacterNotesService $service
     * @return CharacterNotesResource
     */
    public function update(UpdateCharacterNotesRequest $request, Character $character, CharacterNotesService $service)
    {
        $notes = $character->notes;
        $updated = $service->update($request, $notes);

        return new CharacterNotesResource($notes);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\CharacterNotes  $characterNotes
     * @return \Illuminate\Http\Response
     */
    public function destroy(CharacterNotes $characterNotes)
    {
        //
    }
}
