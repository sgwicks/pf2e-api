<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreBackgroundRequest;
use App\Http\Requests\UpdateBackgroundRequest;
use App\Http\Resources\BackgroundResource;
use App\Models\Background;
use App\Services\BackgroundService;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Resources\Json\ResourceCollection;

class BackgroundController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return ResourceCollection
     */
    public function index()
    {
        $backgrounds = Background::query()->get();

        return BackgroundResource::collection($backgrounds);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreBackgroundRequest  $request
     * @return BackgroundResource
     */
    public function store(StoreBackgroundRequest $request, BackgroundService $service)
    {
        $background = $service->create($request);

        return new BackgroundResource($background);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Background  $background
     * @return BackgroundResource
     */
    public function show(Background $background)
    {
        return new BackgroundResource($background);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateBackgroundRequest  $request
     * @param  \App\Models\Background  $background
     * @return BackgroundResource
     */
    public function update(UpdateBackgroundRequest $request, Background $background, BackgroundService $service)
    {
        $service->update($request, $background);

        return new BackgroundResource($background);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Background  $background
     * @return JsonResponse
     */
    public function destroy(Background $background, BackgroundService $service)
    {
        $service->destroy($background);

        return new JsonResponse(null, 204);
    }
}
