<?php

namespace Database\Seeders;

use App\Models\Character;
use App\Models\CharacterMovement;
use Illuminate\Database\Seeder;

class CharacterMovementSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Character $character)
    {
        CharacterMovement::factory()->for($character)->create();
    }
}
