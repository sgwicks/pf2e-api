<?php

namespace App\Imports;

use App\Models\Heritage;
use Maatwebsite\Excel\Concerns\ToModel;

class HeritagesImport implements ToModel
{
    public function model(array $row)
    {
        return new Heritage([
            'name' => $row[0],
            'description' => $row[1]
        ]);
    }
}
