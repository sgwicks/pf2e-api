<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreCharacterFeatRequest;
use App\Http\Requests\UpdateCharacterFeatRequest;
use App\Models\CharacterFeat;

class CharacterFeatController extends Controller
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
     * @param  \App\Http\Requests\StoreCharacterFeatRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreCharacterFeatRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\CharacterFeat  $characterFeat
     * @return \Illuminate\Http\Response
     */
    public function show(CharacterFeat $characterFeat)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\CharacterFeat  $characterFeat
     * @return \Illuminate\Http\Response
     */
    public function edit(CharacterFeat $characterFeat)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateCharacterFeatRequest  $request
     * @param  \App\Models\CharacterFeat  $characterFeat
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateCharacterFeatRequest $request, CharacterFeat $characterFeat)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\CharacterFeat  $characterFeat
     * @return \Illuminate\Http\Response
     */
    public function destroy(CharacterFeat $characterFeat)
    {
        //
    }
}
