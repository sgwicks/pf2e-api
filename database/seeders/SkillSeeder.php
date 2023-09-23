<?php

namespace Database\Seeders;

use Database\Seeders\Traits\ForeignKeys;
use Database\Seeders\Traits\TruncateTable;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SkillSeeder extends Seeder
{
    use TruncateTable, ForeignKeys;
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->truncate('skills');

        $data = [
            ['name' => 'acrobatics', 'ability' => 'dexterity', 'armour' => true],
            ['name' => 'athletics', 'ability' => 'strength', 'armour' => true],
            ['name' => 'animal handling', 'ability' => 'wisdom', 'armour' => false],
            ['name' => 'persuasion', 'ability' => 'charisma', 'armour' => false]
        ];

        DB::table('skills')->insert($data);
    }
}
