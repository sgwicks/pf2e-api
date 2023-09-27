<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreCharacterClassRequest;
use App\Http\Requests\UpdateCharacterClassRequest;
use App\Http\Resources\CharacterClassResource;
use App\Imports\CharacterClassesImport;
use App\Models\CharacterClass;
use App\Services\CharacterClassService;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\ResourceCollection;
use Maatwebsite\Excel\Facades\Excel;

class CharacterClassController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return ResourceCollection
     */
    public function index()
    {
        $characterClasses = CharacterClass::query()->get();

        return CharacterClassResource::collection($characterClasses);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreCharacterClassRequest  $request
     * @return CharacterClassResource
     */
    public function store(StoreCharacterClassRequest $request, CharacterClassService $service)
    {
        $characterClass = $service->create($request);

        return new CharacterClassResource($characterClass);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\CharacterClass  $characterClass
     * @return CharacterClassResource
     */
    public function show(CharacterClass $characterClass)
    {
        return new CharacterClassResource($characterClass);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateCharacterClassRequest  $request
     * @param  \App\Models\CharacterClass  $characterClass
     * @return CharacterClassResource
     */
    public function update(UpdateCharacterClassRequest $request, CharacterClass $characterClass, CharacterClassService $service)
    {
        $service->update($request, $characterClass);

        return new CharacterClassResource($characterClass);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\CharacterClass  $characterClass
     * @return JsonResponse
     */
    public function destroy(CharacterClass $characterClass, CharacterClassService $service)
    {
        $service->destroy($characterClass);

        return new JsonResponse(null, 204);
    }

    public function bulkUpload(Request $request)
    {
        Excel::import(new CharacterClassesImport(), $request->file('file'));

        $characterClasses = CharacterClass::query()->get();

        return CharacterClassResource::collection($characterClasses);
    }
}
