<?php

namespace Database\Seeders;

use App\Models\Role;
use App\Models\User;
use Database\Seeders\Traits\ForeignKeys;
use Database\Seeders\Traits\TruncateTable;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    use ForeignKeys, TruncateTable;
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->truncate('users');
        $users = User::factory(10)->create();

        $users->each(function (User $user) {
           $user->roles()->save(Role::query()->firstWhere('role', 'user'));
        });

        $admin = User::factory()->admin()->create();
        $admin->roles()->save(Role::query()->firstWhere('role', 'admin'));
        $admin->roles()->save(Role::query()->firstWhere('role', 'user'));
    }
}
