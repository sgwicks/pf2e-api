<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreCharacterArmourRequest;
use App\Http\Requests\UpdateCharacterArmourRequest;
use App\Models\CharacterArmour;

class CharacterArmourController extends Controller
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
     * @param  \App\Http\Requests\StoreCharacterArmourRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreCharacterArmourRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\CharacterArmour  $characterArmour
     * @return \Illuminate\Http\Response
     */
    public function show(CharacterArmour $characterArmour)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\CharacterArmour  $characterArmour
     * @return \Illuminate\Http\Response
     */
    public function edit(CharacterArmour $characterArmour)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateCharacterArmourRequest  $request
     * @param  \App\Models\CharacterArmour  $characterArmour
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateCharacterArmourRequest $request, CharacterArmour $characterArmour)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\CharacterArmour  $characterArmour
     * @return \Illuminate\Http\Response
     */
    public function destroy(CharacterArmour $characterArmour)
    {
        //
    }
}
