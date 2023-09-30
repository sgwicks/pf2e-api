<?php

namespace App\Services;

use App\Exceptions\GeneralJsonException;
use App\Http\Requests\LoginRequest;
use App\Models\User;
use Illuminate\Http\JsonResponse;
use Illuminate\Support\Facades\Auth;

class AuthService
{
    public function login(LoginRequest $request)
    {
        return User::query()->where('email', $request->getUser())->firstOrFail();
    }
}
