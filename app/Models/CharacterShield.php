<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CharacterShield extends Model
{
    use HasFactory;

    protected $fillable = [
        'character_id',
        'shield_id',
        'current_hp',
        'raised'
    ];

    public function shield()
    {
        return $this->belongsTo(Shield::class, 'shield_id');
    }

    public function character()
    {
        return $this->belongsTo(Character::class, 'character_id');
    }
}
