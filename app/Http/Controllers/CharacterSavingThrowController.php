<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreCharacterSavingThrowRequest;
use App\Http\Requests\UpdateCharacterSavingThrowRequest;
use App\Models\CharacterSavingThrow;
use App\Models\Character;
use App\Services\CharacterSavingThrowService;
use App\Http\Resources\CharacterSavingThrowResource;

class CharacterSavingThrowController extends Controller
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
     * @param  \App\Http\Requests\StoreCharacterSavingThrowRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreCharacterSavingThrowRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\CharacterSavingThrow  $characterSavingThrow
     * @return \Illuminate\Http\Response
     */
    public function show(CharacterSavingThrow $characterSavingThrow)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  UpdateCharacterSavingThrowRequest  $request
     * @param  Character  $character
     * @return CharacterSavingThrowResource
     */
    public function update(UpdateCharacterSavingThrowRequest $request, Character $character, CharacterSavingThrowService $service)
    {
        
        $savingThrows = $character->savingThrows;
        $service->update($request, $savingThrows);

        return new CharacterSavingThrowResource($savingThrows);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\CharacterSavingThrow  $characterSavingThrow
     * @return \Illuminate\Http\Response
     */
    public function destroy(CharacterSavingThrow $characterSavingThrow)
    {
        //
    }
}
