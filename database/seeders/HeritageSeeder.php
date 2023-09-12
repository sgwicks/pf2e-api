<?php

namespace Database\Seeders;

use App\Models\Heritage;
use Illuminate\Database\Seeder;

class HeritageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Heritage::factory(5)->create();
    }
}
