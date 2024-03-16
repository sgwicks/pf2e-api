<?php

namespace App\Services;

use App\Exceptions\GeneralJsonException;
use App\Http\Requests\LoginRequest;
use App\Http\Requests\UpdateUserRequest;
use App\Models\User;
use App\Models\Role;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class UserService
{
    /**
     * @param Request $request
     * @return Model
     */
    public function create($request)
    {
        $user = User::query()->create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);

        $user->roles()->save(Role::query()->firstWhere('role', 'user'));

        return $user;
    }

    /**
     * @param UpdateUserRequest
     */
    public function update(UpdateUserRequest $request, User $user)
    {
        $updated = $user->update([
           'name' => $request->name ?? $user->name,
           'email' => $request->email ?? $user->email,
           'password' => Hash::make($request->password) ?? $user->password
        ]);

        if (!$updated) {
            throw new GeneralJsonException('Failed to update user');
        }

        return $user;
    }

    public function destroy(User $user)
    {
        $deleted = $user->forceDelete();

        if (!$deleted) {
            throw new GeneralJsonException('Failed to delete user');
        }

        return $deleted;
    }
}
