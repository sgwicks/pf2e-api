<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreCharacterShieldRequest;
use App\Http\Requests\UpdateCharacterShieldRequest;
use App\Models\CharacterShield;

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
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreCharacterShieldRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreCharacterShieldRequest $request)
    {
        //
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
