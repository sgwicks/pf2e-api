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
            ['name' => 'acrobatics', 'attribute' => 'dexterity', 'armour' => true],
            ['name' => 'athletics', 'attribute' => 'strength', 'armour' => true],
            ['name' => 'animal handling', 'attribute' => 'wisdom', 'armour' => false],
            ['name' => 'persuasion', 'attribute' => 'charisma', 'armour' => false]
        ];

        DB::table('skills')->insert($data);
    }
}
