<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CharacterCharacterClass extends Model
{
    use HasFactory;

    protected $guarded = [
        'id',
        'created_at',
        'updated_at'
    ];

    protected $visible = [
        'class_name',
        'level'
    ];

    public function character()
    {
        return $this->belongsTo(Character::class, 'character_id');
    }

    public function characterClass()
    {
        return $this->belongsTo(CharacterClass::class, 'class_name');
    }
}
