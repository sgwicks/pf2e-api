<?php

namespace App\Http\Controllers;

use App\Exceptions\GeneralJsonException;
use App\Http\Requests\StoreFeatRequest;
use App\Http\Requests\UpdateFeatRequest;
use App\Http\Resources\FeatResource;
use App\Models\Feat;
use App\Services\FeatService;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\ResourceCollection;

class FeatController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return ResourceCollection
     */
    public function index(): ResourceCollection
    {
        $feats = Feat::query()->get();

        return FeatResource::collection($feats);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param StoreFeatRequest $request
     * @param FeatService $service
     * @return FeatResource
     */
    public function store(StoreFeatRequest $request, FeatService $service): FeatResource
    {
        $feat = $service->create($request);

        return new FeatResource($feat);
    }

    /**
     * Display the specified resource.
     *
     * @param  Feat  $feat
     * @return FeatResource
     */
    public function show(Feat $feat): FeatResource
    {
        return new FeatResource($feat);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param UpdateFeatRequest $request
     * @param Feat $feat
     * @param FeatService $service
     * @return FeatResource
     * @throws GeneralJsonException
     */
    public function update(UpdateFeatRequest $request, Feat $feat, FeatService $service): FeatResource
    {
        $service->update($request, $feat);

        return new FeatResource($feat);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param Feat  $feat
     * @param FeatService $service
     * @return JsonResponse
     * @throws GeneralJsonException
     */
    public function destroy(Feat $feat, FeatService $service): JsonResponse
    {
        $service->destroy($feat);

        return new JsonResponse(null, 204);
    }
}
