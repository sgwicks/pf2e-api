<?php

namespace App\Imports;

use App\Models\Ancestry;
use Maatwebsite\Excel\Concerns\ToModel;

class AncestriesImport implements ToModel
{
    public function model(array $row)
    {
        return new Ancestry([
            'name' => $row[0],
            'description' => $row[1]
        ]);
    }
}
