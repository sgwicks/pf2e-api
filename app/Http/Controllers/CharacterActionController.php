<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreCharacterActionRequest;
use App\Http\Requests\UpdateCharacterActionRequest;
use App\Models\CharacterAction;

class CharacterActionController extends Controller
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
     * @param  \App\Http\Requests\StoreCharacterActionRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreCharacterActionRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\CharacterAction  $characterAction
     * @return \Illuminate\Http\Response
     */
    public function show(CharacterAction $characterAction)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\CharacterAction  $characterAction
     * @return \Illuminate\Http\Response
     */
    public function edit(CharacterAction $characterAction)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateCharacterActionRequest  $request
     * @param  \App\Models\CharacterAction  $characterAction
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateCharacterActionRequest $request, CharacterAction $characterAction)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\CharacterAction  $characterAction
     * @return \Illuminate\Http\Response
     */
    public function destroy(CharacterAction $characterAction)
    {
        //
    }
}
