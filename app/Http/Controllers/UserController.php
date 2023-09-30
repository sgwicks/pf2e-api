<?php

namespace App\Http\Controllers;

use App\Exceptions\GeneralJsonException;
use App\Http\Requests\StoreUserRequest;
use App\Http\Requests\UpdateUserRequest;
use App\Http\Resources\UserResource;
use App\Models\User;
use App\Services\UserService;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\ResourceCollection;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return ResourceCollection
     */
    public function index()
    {
        $users = User::query()->get();

        return UserResource::collection($users);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreUserRequest  $request
     * @return UserResource
     */
    public function store(StoreUserRequest $request, UserService $service)
    {
        $created = $service->create($request);

        return new UserResource($created);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\User  $user
     * @return UserResource
     */
    public function show(Request $request, User $user)
    {
        return (new UserResource($user));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateUserRequest  $request
     * @param  \App\Models\User  $user
     * @return UserResource
     */
    public function update(UpdateUserRequest $request, User $user, UserService $service)
    {
        $updated = $service->update($request, $user);

        return new UserResource($updated);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\User  $user
     * @return JsonResponse
     */
    public function destroy(User $user, UserService $service)
    {
        $service->destroy($user);

        return new JsonResponse(null, 204);
    }
}
