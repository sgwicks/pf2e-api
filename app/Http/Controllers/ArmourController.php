<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreArmourRequest;
use App\Http\Requests\UpdateArmourRequest;
use App\Models\Armour;

class ArmourController extends Controller
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
     * @param  \App\Http\Requests\StoreArmourRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreArmourRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Armour  $armour
     * @return \Illuminate\Http\Response
     */
    public function show(Armour $armour)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Armour  $armour
     * @return \Illuminate\Http\Response
     */
    public function edit(Armour $armour)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateArmourRequest  $request
     * @param  \App\Models\Armour  $armour
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateArmourRequest $request, Armour $armour)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Armour  $armour
     * @return \Illuminate\Http\Response
     */
    public function destroy(Armour $armour)
    {
        //
    }
}
