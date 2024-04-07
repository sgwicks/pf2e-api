<?php

namespace App\Imports;

use App\Models\Weapon;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;
use Maatwebsite\Excel\Concerns\WithUpserts;

class WeaponsImport implements ToModel, WithHeadingRow, WithUpserts
{
    public function uniqueBy() {
        return 'name';
    }

    public function model(array $row)
    {
        return new Weapon([
            'category' => $row['category'],
            'name' => $row['name'],
            'price' => $row['price'],
            'damage_die_amount' => $row['damage_die_amount'],
            'damage_die_type' => $row['damage_die_type'],
            'damage_type' => $row['damage_type'],
            'range' => $row['range'],
            'reload' => $row['reload'],
            'bulk' => $row['bulk'],
            'hands' => $row['hands'],
            'group' => $row['group'],
            'traits' => explode("|", $row['traits'])
        ]);
    }
}
