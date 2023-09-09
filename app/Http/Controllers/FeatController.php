<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreFeatRequest;
use App\Http\Requests\UpdateFeatRequest;
use App\Models\Feat;

class FeatController extends Controller
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
     * @param  \App\Http\Requests\StoreFeatRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreFeatRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Feat  $feat
     * @return \Illuminate\Http\Response
     */
    public function show(Feat $feat)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Feat  $feat
     * @return \Illuminate\Http\Response
     */
    public function edit(Feat $feat)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateFeatRequest  $request
     * @param  \App\Models\Feat  $feat
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateFeatRequest $request, Feat $feat)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Feat  $feat
     * @return \Illuminate\Http\Response
     */
    public function destroy(Feat $feat)
    {
        //
    }
}
