<?php

namespace Database\Seeders;

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
        User::factory(10)->create();
    }
}
