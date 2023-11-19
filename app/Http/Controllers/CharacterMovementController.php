<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreCharacterMovementRequest;
use App\Http\Requests\UpdateCharacterMovementRequest;
use App\Models\CharacterMovement;
use App\Models\Character;
use App\Http\Resources\CharacterMovementResource;
use App\Services\CharacterMovementService;

class CharacterMovementController extends Controller
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
     * @param  \App\Http\Requests\StoreCharacterMovementRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreCharacterMovementRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\CharacterMovement  $characterMovement
     * @return \Illuminate\Http\Response
     */
    public function show(CharacterMovement $characterMovement)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateCharacterMovementRequest  $request
     * @param  Character  $character
     * @return CharacterMovementResource
     */
    public function update(UpdateCharacterMovementRequest $request, Character $character, CharacterMovementService $service)
    {
        $movement = $character->movement;
        $service->update($request, $movement);

        return new CharacterMovementResource($movement);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\CharacterMovement  $characterMovement
     * @return \Illuminate\Http\Response
     */
    public function destroy(CharacterMovement $characterMovement)
    {
        //
    }
}
