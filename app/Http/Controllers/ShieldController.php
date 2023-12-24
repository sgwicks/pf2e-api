<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreShieldRequest;
use App\Http\Requests\UpdateShieldRequest;
use App\Models\Shield;
use App\Http\Resources\ShieldResource;
use App\Services\ShieldService;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Resources\Json\ResourceCollection;

class ShieldController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return ResourceCollection
     */
    public function index()
    {
        $shields = Shield::all();

        return ShieldResource::collection($shields);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param StoreShieldRequest $request
     * @param ShieldService $service
     * @return ShieldResource
     */
    public function store(StoreShieldRequest $request, ShieldService $service)
    {
        $shield = $service->create($request);

        return new ShieldResource($shield);
    }

    /**
     * Display the specified resource.
     *
     * @param  Shield  $shield
     * @return ShieldResource
     */
    public function show(Shield $shield)
    {
        return new ShieldResource($shield);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  UpdateShieldRequest  $request
     * @param  Shield  $shield
     * @param ShieldService $service
     * @return ShieldResource
     */
    public function update(UpdateShieldRequest $request, Shield $shield, ShieldService $service)
    {
        $service->update($request, $shield);

        return new ShieldResource($shield);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  Shield  $shield
     * @param ShieldService $service
     * @return JsonResponse
     */
    public function destroy(Shield $shield, ShieldService $service)
    {
        $service->destroy($shield);

        return new JsonResponse(null, 204);
    }
}
