<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreCharacterPerceptionRequest;
use App\Http\Requests\UpdateCharacterPerceptionRequest;
use App\Models\CharacterPerception;
use App\Models\Character;
use App\Http\Resources\CharacterPerceptionResource;
use App\Services\CharacterPerceptionService;

class CharacterPerceptionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreCharacterPerceptionRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreCharacterPerceptionRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\CharacterPerception  $characterPerception
     * @return \Illuminate\Http\Response
     */
    public function show(CharacterPerception $characterPerception)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateCharacterPerceptionRequest  $request
     * @param  Character  $character
     * @return CharacterPerceptionResource
     */
    public function update(UpdateCharacterPerceptionRequest $request, Character $character, CharacterPerceptionService $service)
    {
        $perception = $character->perception;
        $service->update($request, $perception);

        return new CharacterPerceptionResource($perception);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\CharacterPerception  $characterPerception
     * @return \Illuminate\Http\Response
     */
    public function destroy(CharacterPerception $characterPerception)
    {
        //
    }
}
