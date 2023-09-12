<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CharacterItem extends Model
{
    use HasFactory;

    protected $guarded = [
        'id',
        'created_at',
        'updated_at'
    ];

    public function character()
    {
        return $this->belongsTo(Character::class, 'character_id');
    }

    public function item()
    {
        return $this->belongsTo(Item::class, 'item_name');
    }
}
