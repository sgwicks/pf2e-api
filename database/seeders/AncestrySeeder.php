<?php

namespace Database\Seeders;

use App\Models\Ancestry;
use Illuminate\Database\Seeder;

class AncestrySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Ancestry::factory(5)->create();
    }
}
