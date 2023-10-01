<?php

namespace App\Services;

use App\Exceptions\GeneralJsonException;
use App\Http\Requests\StorePermissionRequest;
use App\Http\Requests\UpdatePermissionRequest;
use App\Models\Permission;
use App\Models\Role;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;

class PermissionService
{
    /**
     * @param StorePermissionRequest $request
     * @return Builder|Model
     */
    public function create(StorePermissionRequest $request)
    {
        $role = $request->role_id ?
            Role::query()->where('id', $request->role_id)->firstOrFail() :
            Role::query()->where('role', $request->role_name)->firstOrFail();

        $permission = new Permission(['permission' => $request->permission]);

        $role->permissions()->save($permission);

        return $permission;
    }

    public function destroy(Permission $permission)
    {
        $deleted = $permission->forceDelete();

        if (!$deleted) {
            throw new GeneralJsonException('Permission not deleted');
        }

        return $deleted;
    }
}
