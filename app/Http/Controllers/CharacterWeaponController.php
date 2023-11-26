<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreCharacterWeaponRequest;
use App\Http\Requests\UpdateCharacterWeaponRequest;
use App\Models\CharacterWeapon;

class CharacterWeaponController extends Controller
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
     * @param  \App\Http\Requests\StoreCharacterWeaponRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreCharacterWeaponRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\CharacterWeapon  $characterWeapon
     * @return \Illuminate\Http\Response
     */
    public function show(CharacterWeapon $characterWeapon)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\CharacterWeapon  $characterWeapon
     * @return \Illuminate\Http\Response
     */
    public function edit(CharacterWeapon $characterWeapon)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateCharacterWeaponRequest  $request
     * @param  \App\Models\CharacterWeapon  $characterWeapon
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateCharacterWeaponRequest $request, CharacterWeapon $characterWeapon)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\CharacterWeapon  $characterWeapon
     * @return \Illuminate\Http\Response
     */
    public function destroy(CharacterWeapon $characterWeapon)
    {
        //
    }
}
