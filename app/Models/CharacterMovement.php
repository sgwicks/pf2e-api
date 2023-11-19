<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CharacterMovement extends Model
{
    use HasFactory;

    public function character()
    {
        return $this->belongsTo(Character::class, 'character_id');
    }
}
