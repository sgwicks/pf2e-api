<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CharacterShield extends Model
{
    use HasFactory;

    public function shield()
    {
        return $this->belongsTo(Shield::class, 'shield_id');
    }

    public function character()
    {
        return $this->belongsTo(Character::class, 'character_id');
    }
}
