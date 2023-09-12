<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CharacterClass extends Model
{
    use HasFactory;

    /**
     * Attributes which are mass assignable
     * @var array
     */
    protected $fillable = [
        'name',
        'key_ability',
        'hit_points'
    ];

    public function characterCharacterClass()
    {
        return $this->hasMany(CharacterCharacterClass::class, 'class_name');
    }
}
