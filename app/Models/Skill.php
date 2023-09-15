<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Skill extends Model
{
    use HasFactory;

    protected $primaryKey = 'name';

    public $incrementing = false;

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
        return $this->hasMany(CharacterSkill::class, 'skill_name');
    }
}
