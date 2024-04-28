<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Character extends Model
{
    use HasFactory;

    /** @var array */
    protected $guarded = [
        'id',
        'created_at',
        'updated_at'
    ];

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    public function skills()
    {
        return $this->hasMany(CharacterSkill::class, 'character_id');
    }

    public function feats()
    {
        return $this->hasMany(CharacterFeat::class, 'character_id');
    }

    public function actions()
    {
        return $this->hasMany(CharacterAction::class, 'character_id');
    }

    public function characterClasses()
    {
        return $this->hasMany(CharacterCharacterClass::class, 'character_id');
    }

    public function items()
    {
        return $this->hasMany(CharacterItem::class, 'character_id');
    }

    public function savingThrows()
    {
        return $this->hasOne(CharacterSavingThrow::class, 'character_id');
    }

    public function movement()
    {
        return $this->hasOne(CharacterMovement::class, 'character_id');
    }

    public function perception()
    {
        return $this->hasOne(CharacterPerception::class, 'character_id');
    }

    public function health()
    {
        return $this->hasOne(CharacterHealth::class, 'character_id');
    }

    public function armours()
    {
        return $this->hasMany(CharacterArmour::class, 'character_id');
    }

    public function weapons()
    {
        return $this->hasMany(CharacterWeapon::class, 'character_id');
    }

    public function shield()
    {
        return $this->hasOne(CharacterShield::class, 'character_id');
    }

    public function proficiency()
    {
        return $this->hasOne(CharacterProficiency::class, 'character_id');
    }

    public function notes()
    {
        return $this->hasOne(CharacterNotes::class, 'character_id');
    }
}
