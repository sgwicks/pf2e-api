<?php

namespace App\Imports;

use App\Models\Feat;
use Maatwebsite\Excel\Concerns\ToModel;

class FeatsImport implements ToModel
{
    public function model(array $row)
    {
        return new Feat([
            'name' => $row[0],
            'description' => $row[1]
        ]);
    }
}
