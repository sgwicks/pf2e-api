<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreAncestryRequest;
use App\Http\Requests\UpdateAncestryRequest;
use App\Models\Ancestry;

class AncestryController extends Controller
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
     * @param  \App\Http\Requests\StoreAncestryRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreAncestryRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Ancestry  $ancestry
     * @return \Illuminate\Http\Response
     */
    public function show(Ancestry $ancestry)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Ancestry  $ancestry
     * @return \Illuminate\Http\Response
     */
    public function edit(Ancestry $ancestry)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateAncestryRequest  $request
     * @param  \App\Models\Ancestry  $ancestry
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateAncestryRequest $request, Ancestry $ancestry)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Ancestry  $ancestry
     * @return \Illuminate\Http\Response
     */
    public function destroy(Ancestry $ancestry)
    {
        //
    }
}
