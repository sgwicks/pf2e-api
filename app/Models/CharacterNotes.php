<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CharacterNotes extends Model
{
    use HasFactory;

    protected $fillable = [
        'body'
    ];

    public function character()
    {
        return $this->belongsTo(Character::class, 'character_id');
    }
}
