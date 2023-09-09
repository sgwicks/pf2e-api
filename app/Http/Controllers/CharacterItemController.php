<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreCharacterItemRequest;
use App\Http\Requests\UpdateCharacterItemRequest;
use App\Models\CharacterItem;

class CharacterItemController extends Controller
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
     * @param  \App\Http\Requests\StoreCharacterItemRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreCharacterItemRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\CharacterItem  $characterItem
     * @return \Illuminate\Http\Response
     */
    public function show(CharacterItem $characterItem)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\CharacterItem  $characterItem
     * @return \Illuminate\Http\Response
     */
    public function edit(CharacterItem $characterItem)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateCharacterItemRequest  $request
     * @param  \App\Models\CharacterItem  $characterItem
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateCharacterItemRequest $request, CharacterItem $characterItem)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\CharacterItem  $characterItem
     * @return \Illuminate\Http\Response
     */
    public function destroy(CharacterItem $characterItem)
    {
        //
    }
}
