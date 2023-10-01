<?php

namespace Database\Seeders;

use App\Models\Permission;
use App\Models\Role;
use Database\Seeders\Traits\TruncateTable;
use Illuminate\Database\Seeder;

class PermissionSeeder extends Seeder
{
    use TruncateTable;
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->truncate('permissions');
        $userPermissions = Permission::factory()
            ->count(8)
            ->sequence(
            ['permission' => 'show.user.own'],
            ['permission' => 'update.user.own'],
            ['permission' => 'delete.user.own'],
            ['permission' => 'index.character.own'],
            ['permission' => 'show.character.own'],
            ['permission' => 'create.character.own'],
            ['permission' => 'update.character.own'],
            ['permission' => 'delete.character.own']
            )
            ->create();

        $userPermissions->each(function (Permission $permission) {
            $permission->roles()->attach([Role::query()->firstWhere('role', 'user')->id]);
        });

        $adminPermissions = Permission::factory()
            ->count(9)
            ->sequence(
            ['permission' => 'index.user.any'],
            ['permission' => 'show.user.any'],
            ['permission' => 'update.user.any'],
            ['permission' => 'delete.user.any'],
            ['permission' => 'index.character.any'],
            ['permission' => 'show.character.any'],
            ['permission' => 'create.character.any'],
            ['permission' => 'update.character.any'],
            ['permission' => 'delete.character.any'],
            )
            ->hasAttached(Role::query()->firstWhere('role', 'admin'))
            ->create();

        $adminPermissions->each(function (Permission $permission) {
            $permission->roles()->sync([Role::query()->firstWhere('role', 'admin')->id]);
        });
    }
}
