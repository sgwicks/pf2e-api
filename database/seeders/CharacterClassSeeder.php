<?php

namespace Database\Seeders;

use Database\Seeders\Traits\ForeignKeys;
use Database\Seeders\Traits\TruncateTable;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CharacterClassSeeder extends Seeder
{
    use TruncateTable, ForeignKeys;
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->truncate('character_classes');

        $data = [
          ['name' => 'champion', 'key_ability' => 'strength,dexterity', 'hit_points' => 10],
          ['name' => 'wizard', 'key_ability' => 'intelligence', 'hit_points' => 6],
          ['name' => 'bard', 'key_ability' => 'charisma', 'hit_points' => 8]
        ];
        DB::table('character_classes')->insert($data);

    }
}
