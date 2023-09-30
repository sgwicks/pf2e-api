<?php

namespace Database\Seeders;

use App\Models\Role;
use Database\Seeders\Traits\TruncateTable;
use Illuminate\Database\Seeder;

class RoleSeeder extends Seeder
{
    use TruncateTable;
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->truncate('roles');
        Role::query()->create(['role' => 'user']);
        Role::query()->create(['role' => 'admin']);
    }
}
