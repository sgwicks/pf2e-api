<?php

namespace App\Imports;

use App\Models\Background;
use Maatwebsite\Excel\Concerns\ToModel;

class BackgroundsImport implements ToModel
{
    public function model(array $row)
    {
        return new Background([
            'name' => $row[0],
            'description' => $row[1]
        ]);
    }
}
