<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CharacterHealth extends Model
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

    public function getResistancesAttribute($value)
    {
        if (!$value) return [];
        return explode(',', $value);
    }

    public function setResistancesAttribute($value)
    {
        $this->attributes['resistances'] = implode(',', $value);
    }

    public function getImmunitiesAttribute($value)
    {
        if (!$value) return [];
        return explode(',', $value);
    }

    public function setImmunitiesAttribute($value)
    {
        $this->attributes['immunities'] = implode(',', $value);
    }

    public function getWeaknessesAttribute($value)
    {
        if (!$value) return [];
        return explode(',', $value);
    }

    public function setWeaknessesAttribute($value)
    {
        $this->attributes['weaknesses'] = implode(',', $value);
    }

    public function getConditionsAttribute($value)
    {
        if (!$value) return [];
        return explode(',', $value);
    }

    public function setConditionsAttribute($value)
    {
        $this->attributes['conditions'] = implode(',', $value);
    }
}
