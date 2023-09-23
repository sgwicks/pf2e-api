<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreHeritageRequest;
use App\Http\Requests\UpdateHeritageRequest;
use App\Http\Resources\HeritageResource;
use App\Models\Heritage;
use App\Services\HeritageService;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Resources\Json\ResourceCollection;

class HeritageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return ResourceCollection
     */
    public function index()
    {
        $heritages = Heritage::query()->get();

        return HeritageResource::collection($heritages);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreHeritageRequest  $request
     * @return HeritageResource
     */
    public function store(StoreHeritageRequest $request, HeritageService $service)
    {
        $heritage = $service->create($request);

        return new HeritageResource($heritage);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Heritage  $heritage
     * @return HeritageResource
     */
    public function show(Heritage $heritage)
    {
        return new HeritageResource($heritage);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateHeritageRequest  $request
     * @param  \App\Models\Heritage  $heritage
     * @return HeritageResource
     */
    public function update(UpdateHeritageRequest $request, Heritage $heritage, HeritageService $service)
    {
        $service->update($request, $heritage);

        return new HeritageResource($heritage);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Heritage  $heritage
     * @return JsonResponse
     */
    public function destroy(Heritage $heritage, HeritageService $service)
    {
        $service->destroy($heritage);

        return new JsonResponse(null, 204);
    }
}
