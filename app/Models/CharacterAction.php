<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CharacterAction extends Model
{
    use HasFactory;

    protected $guarded = [
        'id',
        'created_at',
        'updated_at'
    ];

    protected $visible = [
        'name',
        'description',
        'action',
        'traits',
        'source_book',
        'source_page',
        'is_spell',
        'components',

    ];

    public function character()
    {
        return $this->belongsTo(Character::class, 'character_id');
    }
}
