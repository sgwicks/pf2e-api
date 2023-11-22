<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreCharacterArmourRequest;
use App\Http\Requests\UpdateCharacterArmourRequest;
use App\Models\Character;
use App\Models\CharacterArmour;
use App\Services\CharacterArmourService;
use App\Http\Resources\CharacterArmourResource;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Resources\Json\ResourceCollection;

class CharacterArmourController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return ResourceCollection
     */
    public function index(Character $character)
    {
        $armours = $character->armours()->get();

        return CharacterArmourResource::collection($armours);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreCharacterArmourRequest  $request
     * @return CharacterArmourResource
     */
    public function store(StoreCharacterArmourRequest $request, Character $character, CharacterArmourService $service)
    {
        $created = $service->add($request, $character);

        return new CharacterArmourResource($created);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Character  $character
     * @return CharacterArmourResource
     */
    public function show(Character $character, string $characterArmour)
    {
        $armour = $character->armours()->where('id', $characterArmour)->firstOrFail();

        return new CharacterArmourResource($armour);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateCharacterArmourRequest  $request
     * @param  \App\Models\Character  $character
     * @return CharacterArmourResource
     */
    public function update(UpdateCharacterArmourRequest $request, Character $character, string $characterArmour)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Character $character
     * @return \Illuminate\Http\Response
     */
    public function destroy(Character $character, string $characterArmour, CharacterArmourService $service)
    {
        $armour = $character->armours()->where('id', $characterArmour)->firstOrFail();

        $service->remove($armour);

        return new JsonResponse(null, 204);
    }
}
