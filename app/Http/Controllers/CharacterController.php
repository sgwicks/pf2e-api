<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreCharacterRequest;
use App\Http\Requests\UpdateCharacterRequest;
use App\Http\Resources\CharacterResource;
use App\Models\Character;
use App\Services\CharacterService;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\ResourceCollection;

class CharacterController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return ResourceCollection
     */
    public function index(Request $request)
    {
        $characters = Character::query()->get();

        return CharacterResource::collection($characters);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreCharacterRequest  $request
     * @return CharacterResource
     */
    public function store(StoreCharacterRequest $request, CharacterService $service)
    {
        $character = $service->create($request);

        return new CharacterResource($character);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Character  $character
     * @return CharacterResource
     */
    public function show(Character $character)
    {
        return new CharacterResource($character);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateCharacterRequest  $request
     * @param  \App\Models\Character  $character
     * @return CharacterResource
     */
    public function update(UpdateCharacterRequest $request, Character $character, CharacterService $service)
    {
        $service->update($request, $character);

        return new CharacterResource($character);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Character  $character
     * @return JsonResponse
     */
    public function destroy(Character $character, CharacterService $service)
    {
        $service->destroy($character);

        return new JsonResponse(null, 204);
    }
}
