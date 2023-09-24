<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreCharacterFeatRequest;
use App\Http\Requests\UpdateCharacterFeatRequest;
use App\Http\Resources\CharacterFeatResource;
use App\Models\Character;
use App\Models\CharacterFeat;
use App\Services\CharacterFeatService;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Resources\Json\ResourceCollection;

class CharacterFeatController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return ResourceCollection
     */
    public function index(Character $character)
    {
        $feats = $character->feats()->get();

        return CharacterFeatResource::collection($feats);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreCharacterFeatRequest  $request
     * @return CharacterFeatResource
     */
    public function store(StoreCharacterFeatRequest $request, Character $character, CharacterFeatService $service)
    {
        $characterFeat = $service->add($request, $character);

        return new CharacterFeatResource($characterFeat);
    }

    /**
     * Display the specified resource.
     *
     * @param  Character  $character
     * @param string $characterFeat
     * @return CharacterFeatResource
     */
    public function show(Character $character, string $characterFeat)
    {
        $feat = $character->feats()->where('id', $characterFeat)->firstOrFail();

        return new CharacterFeatResource($feat);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\CharacterFeat  $characterFeat
     * @return JsonResponse
     */
    public function destroy(Character $character, CharacterFeat $characterFeat, CharacterFeatService $service)
    {
        $service->remove($characterFeat);

        return new JsonResponse(null, 204);
    }
}
