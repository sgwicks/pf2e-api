<?php

namespace App\Http\Controllers;

use App\Exceptions\GeneralJsonException;
use App\Http\Requests\StoreCharacterActionRequest;
use App\Http\Requests\UpdateCharacterActionRequest;
use App\Http\Resources\CharacterActionResource;
use App\Models\Character;
use App\Models\CharacterAction;
use App\Services\CharacterActionService;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Resources\Json\ResourceCollection;

class CharacterActionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return ResourceCollection
     */
    public function index(Character $character)
    {
        $actions = $character->actions()->get();

        return CharacterActionResource::collection($actions);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreCharacterActionRequest  $request
     * @return CharacterActionResource
     */
    public function store(StoreCharacterActionRequest $request, Character $character, CharacterActionService $service)
    {
        $action = $service->create($request, $character);

        return new CharacterActionResource($action);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\CharacterAction  $characterAction
     * @return CharacterActionResource
     */
    public function show(Character $character, string $characterAction)
    {
        $action = $character->actions()->where('id', '=', $characterAction)->firstOrFail();

        return new CharacterActionResource($action);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateCharacterActionRequest  $request
     * @param  \App\Models\CharacterAction  $characterAction
     * @return CharacterActionResource
     */
    public function update(UpdateCharacterActionRequest $request, Character $character, string $characterAction, CharacterActionService $service)
    {
        $action = $character->actions()->where('id', $characterAction)->firstOrFail();

        $service->update($request, $action);

        return new CharacterActionResource($action);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\CharacterAction  $characterAction
     * @return JsonResponse
     */
    public function destroy(Character $character, CharacterAction $characterAction, CharacterActionService $service)
    {
        // Check that the action exists on the specified character
        $character->actions()->where('id', $characterAction->id)->firstOrFail();

        $service->destroy($characterAction);

        return new JsonResponse(null, 204);
    }
}
