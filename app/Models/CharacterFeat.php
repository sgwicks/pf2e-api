<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CharacterFeat extends Model
{
    use HasFactory;

    protected $guarded = [
        'created_at',
        'updated_at'
    ];

    public function character()
    {
        return $this->belongsTo(Character::class, 'character_id');
    }

    public function feat()
    {
        return $this->belongsTo(Feat::class, 'feat_id');
    }
}
