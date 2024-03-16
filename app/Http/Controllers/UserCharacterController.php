<?php

namespace App\Http\Controllers;

use App\Exceptions\GeneralJsonException;
use App\Http\Requests\StoreCharacterRequest;
use App\Models\User;
use App\Services\CharacterService;
use Illuminate\Http\JsonResponse;
use App\Http\Resources\CharacterResource;

class UserCharacterController extends Controller
{
    /**
     * Store a newly created resource in storage.
     *
     * @param User $user
     * @param  \App\Http\Requests\StoreCharacterRequest  $request
     * @return CharacterResource
     */
    public function store(User $user, StoreCharacterRequest $request, CharacterService $service)
    {
        $character = $service->create($user, $request);

        return new CharacterResource($character);
    }
}
