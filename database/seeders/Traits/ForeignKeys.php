<?php

namespace Database\Seeders\Traits;

use Illuminate\Support\Facades\DB;

trait ForeignKeys
{
    protected function disableForeignKeys(string $table)
    {
        DB::statement('ALTER TABLE '.$table.' DISABLE TRIGGER ALL;');
    }

    protected function enableForeignKeys(string $table)
    {
        DB::statement('ALTER TABLE '.$table.' ENABLE TRIGGER ALL;');
    }
}
