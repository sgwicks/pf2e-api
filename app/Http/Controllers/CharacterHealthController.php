<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreCharacterHealthRequest;
use App\Http\Requests\UpdateCharacterHealthRequest;
use App\Models\CharacterHealth;
use App\Models\Character;
use App\Http\Resources\CharacterHealthResource;
use App\Services\CharacterHealthService;

class CharacterHealthController extends Controller
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
     * @param  \App\Http\Requests\StoreCharacterHealthRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreCharacterHealthRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\CharacterHealth  $characterHealth
     * @return \Illuminate\Http\Response
     */
    public function show(CharacterHealth $characterHealth)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateCharacterHealthRequest  $request
     * @param  Character  $character
     * @return CharacterHealthResource
     */
    public function update(UpdateCharacterHealthRequest $request, Character $character, CharacterHealthService $service)
    {
        $health = $character->health;
        $service->update($request, $health);

        return new CharacterHealthResource($health);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\CharacterHealth  $characterHealth
     * @return \Illuminate\Http\Response
     */
    public function destroy(CharacterHealth $characterHealth)
    {
        //
    }
}
