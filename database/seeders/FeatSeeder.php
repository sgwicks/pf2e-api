<?php

namespace Database\Seeders;

use App\Models\Feat;
use Database\Seeders\Traits\ForeignKeys;
use Database\Seeders\Traits\TruncateTable;
use Illuminate\Database\Seeder;

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

        Feat::factory(5)->create();

    }
}