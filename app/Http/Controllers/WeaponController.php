<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreWeaponRequest;
use App\Http\Requests\UpdateWeaponRequest;
use App\Http\Resources\WeaponResource;
use App\Models\Weapon;
use App\Services\WeaponService;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\ResourceCollection;


class WeaponController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return ResourceCollection
     */
    public function index(Request $request)
    {
        $weapons = Weapon::query()
            ->where('name', 'like', '%' . strtolower($request->query->get('name')) . '%')
            ->get();

        return WeaponResource::collection($weapons);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreWeaponRequest  $request
     * @return WeaponResource
     */
    public function store(StoreWeaponRequest $request, WeaponService $service)
    {
        $created = $service->create($request);

        return new WeaponResource($created);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Weapon  $weapon
     * @return WeaponResource
     */
    public function show(Weapon $weapon)
    {
        return new WeaponResource($weapon);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateWeaponRequest  $request
     * @param  \App\Models\Weapon  $weapon
     * @return WeaponResource
     */
    public function update(UpdateWeaponRequest $request, Weapon $weapon, WeaponService $service)
    {
        $service->update($request, $weapon);

        return new WeaponResource($weapon);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Weapon  $weapon
     * @return JsonResponse
     */
    public function destroy(Weapon $weapon, WeaponService $service)
    {
        $service->destroy($weapon);

        return new JsonResponse(null, 204);
    }
}
