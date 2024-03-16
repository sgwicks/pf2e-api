<?php

namespace App\Http\Controllers;

use App\Exceptions\GeneralJsonException;
use App\Http\Requests\LoginRequest;
use App\Http\Resources\CharacterResource;
use App\Http\Resources\UserResource;
use App\Services\AuthService;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function login(LoginRequest $request, AuthService $service)
    {
        $user = $service->login($request);

        return new UserResource($user);
    }

    public function refresh(Request $request)
    {
        $token = auth()->refresh();
        dump($request->getUser());
        return response()->noContent()->header('Authorization', $token);
    }

    public function logout(Request $request)
    {
        auth()->logout();

        return response()->noContent();
    }

    protected function respondWithToken($token)
    {
        return response()->json([
            'access_token' => $token,
            'token_type' => 'bearer',
            'expires_in' => auth()->factory()->getTTL() * 60
        ]);
    }
}
