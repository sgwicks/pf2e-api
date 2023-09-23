<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreAncestryRequest;
use App\Http\Requests\UpdateAncestryRequest;
use App\Http\Resources\AncestryResource;
use App\Models\Ancestry;
use App\Services\AncestryService;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Resources\Json\ResourceCollection;

class AncestryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return ResourceCollection
     */
    public function index()
    {
        $ancestries = Ancestry::query()->get();

        return AncestryResource::collection($ancestries);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreAncestryRequest  $request
     * @return AncestryResource
     */
    public function store(StoreAncestryRequest $request, AncestryService $service)
    {
        $ancestry = $service->create($request);

        return new AncestryResource($ancestry);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Ancestry  $ancestry
     * @return AncestryResource
     */
    public function show(Ancestry $ancestry)
    {
        return new AncestryResource($ancestry);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateAncestryRequest  $request
     * @param  \App\Models\Ancestry  $ancestry
     * @return AncestryResource
     */
    public function update(UpdateAncestryRequest $request, Ancestry $ancestry, AncestryService $service)
    {
        $service->update($request, $ancestry);

        return new AncestryResource($ancestry);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Ancestry  $ancestry
     * @return JsonResponse
     */
    public function destroy(Ancestry $ancestry, AncestryService $service)
    {
        $service->destroy($ancestry);

        return new JsonResponse(null, 204);
    }
}
