<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreCharacterCharacterClassRequest;
use App\Http\Requests\UpdateCharacterCharacterClassRequest;
use App\Http\Resources\CharacterCharacterClassResource;
use App\Models\Character;
use App\Models\CharacterCharacterClass;
use App\Services\CharacterCharacterClassService;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Resources\Json\ResourceCollection;

class CharacterCharacterClassController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return ResourceCollection
     */
    public function index(Character $character)
    {
        $characterClasses = $character->characterClasses()->get();

        return CharacterCharacterClassResource::collection($characterClasses);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreCharacterCharacterClassRequest  $request
     * @return CharacterCharacterClassResource
     */
    public function store(StoreCharacterCharacterClassRequest $request, Character $character, CharacterCharacterClassService $service)
    {
        $characterClass = $service->add($request, $character);

        return new CharacterCharacterClassResource($characterClass);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\CharacterCharacterClass  $characterCharacterClass
     * @return CharacterCharacterClassResource
     */
    public function show(Character $character, string $characterCharacterClass)
    {
        $characterClass = $character->characterClasses()->where('id', $characterCharacterClass)->firstOrFail();

        return new CharacterCharacterClassResource($characterClass);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateCharacterCharacterClassRequest  $request
     * @param  \App\Models\CharacterCharacterClass  $characterCharacterClass
     * @return CharacterCharacterClassResource
     */
    public function update(UpdateCharacterCharacterClassRequest $request, Character $character, string $characterCharacterClass, CharacterCharacterClassService $service)
    {
        $characterClass = $character->characterClasses()->where('id', $characterCharacterClass)->firstOrFail();

        $service->update($request, $characterClass);

        return new CharacterCharacterClassResource($characterClass);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\CharacterCharacterClass  $characterCharacterClass
     * @return JsonResponse
     */
    public function destroy(Character $character, string $characterCharacterClass, CharacterCharacterClassService $service)
    {
        $characterClass = $character->characterClasses()->where('id', $characterCharacterClass)->firstOrFail();

        $service->remove($characterClass);

        return new JsonResponse(null, 204);
    }
}
