<?php

namespace Database\Seeders;

use Database\Seeders\Traits\ForeignKeys;
use Database\Seeders\Traits\TruncateTable;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class WeaponSeeder extends Seeder
{
    use TruncateTable, ForeignKeys;
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->truncate('weapons');

        $data = [
            [
                'name' => 'unarmed',
                'category' => 'U',
                'range' => 5,
                'damage_die_type' => 4,
                'damage_die_amount' => 1,
                'damage_type' => 'B',
                'hands' => 1,
                'reload' => 0,
                'price' => 0,
                'bulk' => 0,
                'group' => 'brawling',
                'traits' => 'agile,finesse,nonlethal,unarmed'
            ],
            [
                'name' => 'club',
                'category' => 'S',
                'range' => 5,
                'damage_die_type' => 6,
                'damage_die_amount' => 1,
                'damage_type' => 'B',
                'hands' => 1,
                'reload' => 0,
                'price' => 0,
                'bulk' => 0,
                'group' => 'club',
                'traits' => 'thrown 10ft'
            ],
            [
                'name' => 'longspear',
                'category' => 'S',
                'range' => 5,
                'damage_die_type' => 8,
                'damage_die_amount' => 1,
                'damage_type' => 'P',
                'hands' => 2,
                'reload' => 0,
                'price' => 0.5,
                'bulk' => 2,
                'group' => 'spear',
                'traits' => 'reach'
            ],
            [
                'name' => 'longsword',
                'category' => 'M',
                'range' => 5,
                'damage_die_type' => 8,
                'damage_die_amount' => 1,
                'damage_type' => 'S',
                'hands' => 1,
                'reload' => 0,
                'price' => 1,
                'bulk' => 1,
                'group' => 'sword',
                'traits' => 'versatile p'
            ],
            [
                'name' => 'gnome flickmace',
                'category' => 'A',
                'range' => 5,
                'damage_die_type' => 6,
                'damage_die_amount' => 1,
                'damage_type' => 'B',
                'hands' => 1,
                'reload' => 0,
                'price' => 3,
                'bulk' => 1,
                'group' => 'flail',
                'traits' => 'gnome,reach,sweep'
            ],
            [
                'name' => 'crossbow',
                'category' => 'S',
                'range' => 120,
                'damage_die_type' => 8,
                'damage_die_amount' => 1,
                'damage_type' => 'P',
                'hands' => 2,
                'reload' => 1,
                'price' => 3,
                'bulk' => 1,
                'group' => 'crossbow',
                'traits' => null
            ],
            [
                'name' => 'shortbow',
                'category' => 'M',
                'range' => 60,
                'damage_die_type' => 6,
                'damage_die_amount' => 1,
                'damage_type' => 'P',
                'hands' => 2,
                'reload' => 1,
                'price' => 3,
                'bulk' => 1,
                'group' => 'bow',
                'traits' => 'deadly d10'
            ],
        ];

        DB::table('weapons')->insert($data);
    }
}
