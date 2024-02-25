<?php

namespace App\Imports;

use App\Models\Feat;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;

class FeatsImport implements ToModel, WithHeadingRow
{
    public function model(array $row)
    {
        return new Feat([
            'name' => $row['name'],
            'description' => $row['description'],
            'traits' => explode("|", $row['traits']),
            'level' => $row['level']
        ]);
    }
}
