<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreCharacterClassRequest;
use App\Http\Requests\UpdateCharacterClassRequest;
use App\Models\CharacterClass;

class CharacterClassController extends Controller
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
     * @param  \App\Http\Requests\StoreCharacterClassRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreCharacterClassRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\CharacterClass  $characterClass
     * @return \Illuminate\Http\Response
     */
    public function show(CharacterClass $characterClass)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\CharacterClass  $characterClass
     * @return \Illuminate\Http\Response
     */
    public function edit(CharacterClass $characterClass)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateCharacterClassRequest  $request
     * @param  \App\Models\CharacterClass  $characterClass
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateCharacterClassRequest $request, CharacterClass $characterClass)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\CharacterClass  $characterClass
     * @return \Illuminate\Http\Response
     */
    public function destroy(CharacterClass $characterClass)
    {
        //
    }
}
