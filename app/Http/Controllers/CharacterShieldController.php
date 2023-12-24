<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreCharacterShieldRequest;
use App\Http\Requests\UpdateCharacterShieldRequest;
use App\Models\Character;
use App\Models\CharacterShield;
use App\Http\Resources\CharacterShieldResource;
use App\Services\CharacterShieldService;

class CharacterShieldController extends Controller
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
     * @param  StoreCharacterShieldRequest  $request
     * @param Character $character
     * @param CharacterShieldService $service
     * @return CharacterShieldResource
     */
    public function store(StoreCharacterShieldRequest $request, Character $character, CharacterShieldService $service)
    {
        $shield = $service->add($request, $character);

        return new CharacterShieldResource($shield);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\CharacterShield  $characterShield
     * @return \Illuminate\Http\Response
     */
    public function show(CharacterShield $characterShield)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\CharacterShield  $characterShield
     * @return \Illuminate\Http\Response
     */
    public function edit(CharacterShield $characterShield)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateCharacterShieldRequest  $request
     * @param  \App\Models\CharacterShield  $characterShield
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateCharacterShieldRequest $request, CharacterShield $characterShield)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\CharacterShield  $characterShield
     * @return \Illuminate\Http\Response
     */
    public function destroy(CharacterShield $characterShield)
    {
        //
    }
}
