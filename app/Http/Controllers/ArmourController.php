<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreArmourRequest;
use App\Http\Requests\UpdateArmourRequest;
use App\Http\Resources\ArmourResource;
use App\Models\Armour;
use App\Services\ArmourService;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\ResourceCollection;



class ArmourController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return ResourceCollection
     */
    public function index()
    {
        $armours = Armour::query()->get();

        return ArmourResource::collection($armours);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreArmourRequest  $request
     * @return ArmourResource
     */
    public function store(StoreArmourRequest $request, ArmourService $service): ArmourResource
    {
        $created = $service->create($request);

        return new ArmourResource($created);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Armour  $armour
     * @return ArmourResource
     */
    public function show(Armour $armour)
    {
        return new ArmourResource($armour);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateArmourRequest  $request
     * @param  \App\Models\Armour  $armour
     * @return ArmourResource
     */
    public function update(UpdateArmourRequest $request, Armour $armour, ArmourService $service)
    {
        $updated = $service->update($request, $armour);

        return new ArmourResource($armour);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Armour  $armour
     * @return ArmourResource
     */
    public function destroy(Armour $armour, ArmourService $service)
    {
        $service->destroy($armour);

        return new JsonResponse(null, 204);
    }
}
