<?php

namespace App\Models;

use App\Traits\HasName;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Skill extends Model
{
    use HasFactory;
    use HasName;

    /** @var array  */
    protected $fillable = [
        'name',
        'ability',
        'armour'
    ];

    protected $visible = [
        'name',
        'ability',
        'armour'
    ];

    public function characterSkills()
    {
        return $this->hasMany(CharacterSkill::class, 'skill_id');
    }
}
