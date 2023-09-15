<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CharacterSkill extends Model
{
    use HasFactory;

    protected $guarded = [
        'id',
        'created_at',
        'updated_at'
    ];

//    protected $visible = [
//        'skill_name',
//        'proficiency',
//        'item',
//        'armour',
//        'attribute',
//        'skillInfo'
//    ];

    public function character()
    {
        return $this->belongsTo(Character::class, 'character_id');
    }

    public function skill()
    {
        return $this->belongsTo(Skill::class, 'skill_name');
    }

    public function skillInfo()
    {
        dd('aaa');
//        dd($this->getAttribute('skill'));
//        return $this->getAttribute('skill');
    }
}
