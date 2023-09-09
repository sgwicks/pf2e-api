<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreCharacterSkillRequest;
use App\Http\Requests\UpdateCharacterSkillRequest;
use App\Models\CharacterSkill;

class CharacterSkillController extends Controller
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
     * @param  \App\Http\Requests\StoreCharacterSkillRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreCharacterSkillRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\CharacterSkill  $characterSkill
     * @return \Illuminate\Http\Response
     */
    public function show(CharacterSkill $characterSkill)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\CharacterSkill  $characterSkill
     * @return \Illuminate\Http\Response
     */
    public function edit(CharacterSkill $characterSkill)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateCharacterSkillRequest  $request
     * @param  \App\Models\CharacterSkill  $characterSkill
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateCharacterSkillRequest $request, CharacterSkill $characterSkill)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\CharacterSkill  $characterSkill
     * @return \Illuminate\Http\Response
     */
    public function destroy(CharacterSkill $characterSkill)
    {
        //
    }
}
