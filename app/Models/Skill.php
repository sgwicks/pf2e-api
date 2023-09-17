<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Skill extends Model
{
    use HasFactory;

    /** @var array  */
    protected $fillable = [
        'name',
        'attribute',
        'armour'
    ];

    protected $visible = [
        'name',
        'attribute',
        'armour'
    ];

    public function characterSkills()
    {
        return $this->hasMany(CharacterSkill::class, 'skill_id');
    }
}
