<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(RoleSeeder::class);
        $this->call(PermissionSeeder::class);
        $this->call(UserSeeder::class);

        $this->call(AncestrySeeder::class);
        $this->call(BackgroundSeeder::class);
        $this->call(HeritageSeeder::class);

        $this->call(CharacterClassSeeder::class);

        $this->call(SkillSeeder::class);
        $this->call(FeatSeeder::class);

        $this->call(ItemSeeder::class);

        $this->call(CharacterSeeder::class);
    }
}
