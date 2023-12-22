<?php

namespace Database\Seeders;

use App\Models\Feat;
use Database\Seeders\Traits\ForeignKeys;
use Database\Seeders\Traits\TruncateTable;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class FeatSeeder extends Seeder
{
    use TruncateTable, ForeignKeys;
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->truncate('feats');

        $feats = [
            [
                'name' => 'bard feat',
                'description' => 'A feat selectable by bards',
                'level' => 1,
                'traits' => 'bard',
                'prerequisites' => null
            ],
            [
                'name' => 'orc feat',
                'description' => 'A feat selectable by orcs',
                'level' => 1,
                'traits' => 'orc',
                'prerequisites' => null
            ],
            [
                'name' => 'elf feat',
                'description' => 'A feat selectable by elves',
                'level' => 1,
                'traits' => 'elf',
                'prerequisites' => null
            ],
            [
                'name' => 'champion feat',
                'description' => 'A feat selectable by champions',
                'level' => 1,
                'traits' => 'champion',
                'prerequisites' => null
            ],
            [
                'name' => 'wizard feat',
                'description' => 'A feat selectable by wizards',
                'level' => 1,
                'traits' => 'wizard',
                'prerequisites' => null
            ],
            [
                'name' => 'general feat',
                'description' => 'A feat selectable by anyone',
                'level' => 3,
                'traits' => 'general',
                'prerequisites' => null
            ],
            [
                'name' => 'Skill feat',
                'description' => 'A feat selectable for skills',
                'level' => 1,
                'traits' => 'general,skill',
                'prerequisites' => null
            ],
            [
                'name' => 'bard feat level 2',
                'description' => 'A feat selectable by bards',
                'level' => 2,
                'traits' => 'bard',
                'prerequisites' => null
            ],
            [
                'name' => 'orc feat level 2',
                'description' => 'A feat selectable by orcs',
                'level' => 2,
                'traits' => 'orc',
                'prerequisites' => null
            ],
            [
                'name' => 'elf feat level 2',
                'description' => 'A feat selectable by elves',
                'level' => 2,
                'traits' => 'elf',
                'prerequisites' => null
            ],
            [
                'name' => 'champion feat level 2',
                'description' => 'A feat selectable by champions',
                'level' => 2,
                'traits' => 'champion',
                'prerequisites' => null
            ],
            [
                'name' => 'wizard feat level 2',
                'description' => 'A feat selectable by wizards',
                'level' => 2,
                'traits' => 'wizard',
                'prerequisites' => null
            ],
            [
                'name' => 'bard feat level 4',
                'description' => 'A feat selectable by bards',
                'level' => 4,
                'traits' => 'bard',
                'prerequisites' => null
            ],
            [
                'name' => 'orc feat level 4',
                'description' => 'A feat selectable by orcs',
                'level' => 4,
                'traits' => 'orc',
                'prerequisites' => null
            ],
            [
                'name' => 'elf feat level 4',
                'description' => 'A feat selectable by elves',
                'level' => 4,
                'traits' => 'elf',
                'prerequisites' => null
            ],
            [
                'name' => 'champion feat level 4',
                'description' => 'A feat selectable by champions',
                'level' => 4,
                'traits' => 'champion',
                'prerequisites' => null
            ],
            [
                'name' => 'wizard feat level 4',
                'description' => 'A feat selectable by wizards',
                'level' => 4,
                'traits' => 'wizard',
                'prerequisites' => null
            ],
        ];

        DB::table('feats')->insert($feats);

        Feat::factory(5)->create();

    }
}
