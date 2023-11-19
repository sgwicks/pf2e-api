<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreCharacterMovementRequest;
use App\Http\Requests\UpdateCharacterMovementRequest;
use App\Models\CharacterMovement;

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
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\CharacterMovement  $characterMovement
     * @return \Illuminate\Http\Response
     */
    public function edit(CharacterMovement $characterMovement)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateCharacterMovementRequest  $request
     * @param  \App\Models\CharacterMovement  $characterMovement
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateCharacterMovementRequest $request, CharacterMovement $characterMovement)
    {
        //
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
