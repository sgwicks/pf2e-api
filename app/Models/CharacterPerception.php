<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CharacterPerception extends Model
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

    public function getSensesAttribute($value)
    {
        if (!$value) return [];
        return explode(',', $value);
    }

    public function setSensesAttribute($value)
    {
        $this->attributes['senses'] = implode(',', $value);
    }
}
