<?php

namespace App\Imports;

use App\Models\Armour;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;
use Maatwebsite\Excel\Concerns\WithUpserts;

class ArmoursImport implements ToModel, WithHeadingRow, WithUpserts
{
    public function uniqueBy() {
        return 'name';
    }

    public function model(array $row)
    {
        return new Armour([
            'category' => $row['category'],
            'name' => $row['name'],
            'price' => $row['price'],
            'armour_class' => $row['armour_class'],
            'dex_cap' => $row['dex_cap'],
            'check_penalty' => $row['check_penalty'],
            'speed_penalty' => $row['speed_penalty'],
            'strength' => $row['strength'],
            'bulk' => $row['bulk'],
            'group' => $row['group'],
            'traits' => explode("|", $row['traits'])
        ]);
    }
}
