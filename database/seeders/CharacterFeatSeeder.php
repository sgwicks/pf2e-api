<?php

namespace Database\Seeders;

use App\Models\Character;
use App\Models\CharacterFeat;
use App\Models\Feat;
use Database\Factories\Helpers\FactoryHelper;
use Illuminate\Database\Seeder;

class CharacterFeatSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Character $character)
    {
        CharacterFeat::factory()->for($character)->state(['feat_name' => FactoryHelper::getRandomModelName(Feat::class)])->create();
    }
}
