<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreCharacterProficiencyRequest;
use App\Http\Requests\UpdateCharacterProficiencyRequest;
use App\Http\Resources\CharacterProficiencyResource;
use App\Models\Character;
use App\Models\CharacterProficiency;
use App\Services\CharacterProficiencyService;

class CharacterProficiencyController extends Controller
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
     * @param  \App\Http\Requests\StoreCharacterProficiencyRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreCharacterProficiencyRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\CharacterProficiency  $characterProficiency
     * @return \Illuminate\Http\Response
     */
    public function show(CharacterProficiency $characterProficiency)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateCharacterProficiencyRequest  $request
     * @param  \App\Models\Character  $character
     * @return CharacterProficiencyResource
     */
    public function update(UpdateCharacterProficiencyRequest $request, Character $character, CharacterProficiencyService $service)
    {
        $proficiency = $character->proficiency;

        $service->update($request, $proficiency);

        return new CharacterProficiencyResource($proficiency);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\CharacterProficiency  $characterProficiency
     * @return \Illuminate\Http\Response
     */
    public function destroy(CharacterProficiency $characterProficiency)
    {
        //
    }
}
