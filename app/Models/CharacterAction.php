<?php

namespace App\Models;

use App\Traits\HasName;
use App\Traits\HasTraits;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CharacterAction extends Model
{
    use HasFactory, HasName, HasTraits;

    protected $guarded = [
        'id',
        'created_at',
        'updated_at'
    ];

    protected $visible = [
        'id',
        'name',
        'description',
        'action',
        'traits',
        'source_book',
        'source_page',
        'trigger',
        'is_spell',
        'components',

    ];

    public function character()
    {
        return $this->belongsTo(Character::class, 'character_id');
    }
}
