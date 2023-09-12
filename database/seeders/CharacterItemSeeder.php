<?php

namespace Database\Seeders;

use App\Models\Character;
use App\Models\Item;
use Database\Factories\Helpers\FactoryHelper;
use Illuminate\Database\Seeder;

class CharacterItemSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Character $character)
    {
        $character->items()->sync(FactoryHelper::getRandomModelId(Item::class));
    }
}
