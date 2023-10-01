<?php

namespace App\Services;

use App\Exceptions\GeneralJsonException;
use App\Http\Requests\StoreRoleRequest;
use App\Http\Requests\UpdateRoleRequest;
use App\Models\Permission;
use App\Models\Role;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;

class RoleService
{
    /**
     * @param StoreRoleRequest $request
     * @return Builder|Model
     */
    public function create(StoreRoleRequest $request)
    {
        $role = Role::query()->create([
            'role' => $request->role
        ]);

        if ($request->permissions) {
            $permissions = Permission::query()->whereIn('permission', $request->permissions)->get();
            $role->permissions()->saveMany($permissions);
        }

        return $role;
    }

    public function update(UpdateRoleRequest $request, Role $role)
    {
//        $updated = $role->update([
//            'name' => $request->name ?? $role->name,
//            'ability' => $request->ability ?? $role->ability,
//            'armour' => $request->armour ?? $role->armour
//        ]);
//
//        if (!$updated) {
//            throw new GeneralJsonException('Role not updated');
//        }
//
//        return $updated;
    }

    public function destroy(Role $role)
    {
        $deleted = $role->forceDelete();

        if (!$deleted) {
            throw new GeneralJsonException('Role not deleted');
        }

        return $deleted;
    }
}
