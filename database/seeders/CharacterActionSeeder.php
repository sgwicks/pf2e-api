<?php

namespace Database\Seeders;

use App\Models\Action;
use App\Models\Character;
use App\Models\CharacterAction;
use Database\Factories\Helpers\FactoryHelper;
use Illuminate\Database\Seeder;

class CharacterActionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Character $character)
    {
        $action = CharacterAction::factory(1)->create();
        $character->actions()->sync($action);
    }
}
