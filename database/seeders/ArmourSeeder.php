<?php

namespace Database\Seeders;

use Database\Seeders\Traits\ForeignKeys;
use Database\Seeders\Traits\TruncateTable;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ArmourSeeder extends Seeder
{
    use TruncateTable, ForeignKeys;
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->truncate('armours');

        $data = [
            [
                'name' => 'no_armor',
                'category' => 'unarmoured',
                'price' => 0,
                'armour_class' => 0,
                'dex_cap' => null,
                'check_penalty' => 0,
                'speed_penalty' => 0,
                'strength' => 0,
                'bulk' => 0,
                'group' => null,
                'traits' => null
            ],
            [
                'name' => 'padded_armor',
                'category' => 'unarmoured',
                'price' => 0.2,
                'armour_class' => 1,
                'dex_cap' => 3,
                'check_penalty' => 0,
                'speed_penalty' => 0,
                'strength' => 0,
                'bulk' => 0.1,
                'group' => 'cloth',
                'traits' => 'comfort'
            ],
            [
                'name' => 'leather',
                'category' => 'light',
                'price' => 2,
                'armour_class' => 1,
                'dex_cap' => 4,
                'check_penalty' => 1,
                'speed_penalty' => 0,
                'strength' => 0,
                'bulk' => 1,
                'group' => 'leather',
                'traits' => null
            ],
            [
                'name' => 'chain_mail',
                'category' => 'medium',
                'price' => 6,
                'armour_class' => 4,
                'dex_cap' => 1,
                'check_penalty' => 2,
                'speed_penalty' => 5,
                'strength' => 3,
                'bulk' => 2,
                'group' => 'chain',
                'traits' => 'flexible,noisy'
            ],
            [
                'name' => 'full_plate',
                'category' => 'heavy',
                'price' => 30,
                'armour_class' => 6,
                'dex_cap' => 0,
                'check_penalty' => 3,
                'speed_penalty' => 10,
                'strength' => 4,
                'bulk' => 4,
                'group' => 'plate',
                'traits' => 'bulwark'
            ]
        ];

        DB::table('armours')->insert($data);
    }
}
