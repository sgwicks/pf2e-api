<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CharacterArmour extends Model
{
    use HasFactory;

    public function armour()
    {
        return $this->belongsTo(Armour::class, 'armour_id');
    }

    public function character()
    {
        return $this->belongsTo(Character::class, 'character_id');
    }
}
