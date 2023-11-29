<?php

namespace App\Http\Controllers;

use App\Http\Requests\ReplaceCharacterWeaponRequest;
use App\Http\Requests\StoreCharacterWeaponRequest;
use App\Http\Requests\UpdateCharacterWeaponRequest;
use App\Http\Resources\CharacterWeaponResource;
use App\Models\CharacterWeapon;
use App\Models\Character;
use App\Services\CharacterWeaponService;
use Illuminate\Http\Resources\Json\ResourceCollection;

class CharacterWeaponController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return CharacterWeaponResource
     */
    public function index(Character $character)
    {
        $weapons = $character->weapons()->get();

        return CharacterWeaponResource::collection($weapons);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreCharacterWeaponRequest  $request
     * @return CharacterWeaponResource
     */
    public function store(StoreCharacterWeaponRequest $request, Character $character, CharacterWeaponService $service)
    {
        $created = $service->add($request, $character);

        return new CharacterWeaponResource($created);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\CharacterWeapon  $characterWeapon
     * @return CharacterWeaponResource
     */
    public function show(Character $character, string $characterWeapon)
    {
        $weapon = $character->weapons()->where('id', $characterWeapon)->firstOrFail();
        return new CharacterWeaponResource($weapon);
    }

    /**
     * Update the specified resource.
     *
     * @param  UpdateCharacterWeaponRequest  $request
     * @param  Character  $character
     * @param string $characterWeapon
     * @return CharacterWeaponResource
     */
    public function update(UpdateCharacterWeaponRequest $request, Character $character, string $characterWeapon, CharacterWeaponService $service)
    {
        $weapon = $character->weapons()->where('id', $characterWeapon)->firstOrFail();

        $service->update($request, $weapon);

        return new CharacterWeaponResource($weapon);
    }

    /**
     * Replace the specified resource in storage with a new one.
     *
     * @param  ReplaceCharacterWeaponRequest  $request
     * @param  Character  $character
     * @param string $characterWeapon
     * @return CharacterWeaponResource
     */
    public function replace(ReplaceCharacterWeaponRequest $request, Character $character, string $characterWeapon, CharacterWeaponService $service)
    {
        $weapon = $character->weapons()->where('id', $characterWeapon)->firstOrFail();

        $service->switch($request, $weapon);

        return new CharacterWeaponResource($weapon);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\CharacterWeapon  $characterWeapon
     * @return JsonResponse
     */
    public function destroy(Character $character, string $characterWeapon, CharacterWeaponService $service)
    {
        $weapon = $character->weapons()->where('id', $characterWeapon)->firstOrFail();

        $service->remove($weapon);

        return new JsonResponse(null, 204);
    }
}
