<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreFeatRequest;
use App\Http\Requests\UpdateFeatRequest;
use App\Http\Resources\FeatResource;
use App\Models\Feat;
use App\Services\FeatService;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\ResourceCollection;

class FeatController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return ResourceCollection
     */
    public function index(Request $request)
    {
        $feats = Feat::query()->get();

        return FeatResource::collection($feats);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreFeatRequest  $request
     * @return FeatResource
     */
    public function store(StoreFeatRequest $request, FeatService $service)
    {
        $feat = $service->create($request);

        return new FeatResource($feat);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Feat  $feat
     * @return FeatResource
     */
    public function show(Feat $feat)
    {
        return new FeatResource($feat);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateFeatRequest  $request
     * @param  \App\Models\Feat  $feat
     * @return FeatResource
     */
    public function update(UpdateFeatRequest $request, Feat $feat, FeatService $service)
    {
        $service->update($request, $feat);

        return new FeatResource($feat);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Feat  $feat
     * @return FeatResource
     */
    public function destroy(Feat $feat)
    {
        //
    }
}
