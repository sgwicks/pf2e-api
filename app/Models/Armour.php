<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Traits\HasName;
use App\Traits\HasTraits;

class Armour extends Model
{
    use HasFactory, HasName, HasTraits;

    public function characterArmours()
    {
        return $this->hasMany(CharacterArmour::class, 'armour_id');
    }
}
