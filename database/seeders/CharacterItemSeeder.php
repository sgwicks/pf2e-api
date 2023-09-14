<?php

namespace Database\Seeders;

use App\Models\Character;
use App\Models\CharacterItem;
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
        CharacterItem::factory(3)->for($character)->state(['item_id' => FactoryHelper::getRandomModelId(Item::class)])->create();
    }
}
