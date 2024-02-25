<?php

namespace App\Imports;

use App\Models\CharacterClass;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;

class CharacterClassesImport implements ToModel, WithHeadingRow
{
    public function model(array $row)
    {
        return new CharacterClass([
            'name' => $row['name'],
            'key_ability' => explode("|", $row['key_ability']),
            'hitPoints' => $row['hit_points']
        ]);
    }
}
