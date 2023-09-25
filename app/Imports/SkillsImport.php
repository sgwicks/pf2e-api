<?php

namespace App\Imports;

use App\Models\Skill;
use Maatwebsite\Excel\Concerns\ToModel;

class SkillsImport implements ToModel
{
    public function model(array $row)
    {
        return new Skill([
            'name' => $row[0],
            'ability' => $row[1],
            'armour' => $row[2]
        ]);
    }
}
