<?php

namespace Database\Seeders;

use App\Models\Character;
use App\Models\User;
use Database\Seeders\Traits\ForeignKeys;
use Database\Seeders\Traits\TruncateTable;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CharacterSeeder extends Seeder
{
    use TruncateTable, ForeignKeys;
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->truncate('characters');

        $characters = Character::factory(5)->create();

        $characters->each(function(Character $character) {
            $user = User::find($character->id);
            $character->user()->associate($user);
            $this->callWith([
                CharacterFeatSeeder::class,
                CharacterCharacterClassSeeder::class,
                CharacterSkillSeeder::class,
                CharacterActionSeeder::class,
                CharacterItemSeeder::class,
                CharacterSavingThrowSeeder::class,
                CharacterMovementSeeder::class
            ],
                ['character' => $character]
            );
            $character->save();
        });
    }
}
