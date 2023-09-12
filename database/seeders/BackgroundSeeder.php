<?php

namespace Database\Seeders;

use App\Models\Background;
use Illuminate\Database\Seeder;

class BackgroundSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Background::factory(5)->create();
    }
}
