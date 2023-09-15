<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use PhpParser\Node\Attribute;

class CharacterClass extends Model
{
    use HasFactory;

    protected $primaryKey = 'name';

    public $incrementing = false;

    /**
     * Attributes which are mass assignable
     * @var array
     */
    protected $fillable = [
        'name',
        'key_ability',
        'hit_points'
    ];

    protected $casts = [
      'key_ability' => ''
    ];

    public function characterCharacterClass()
    {
        return $this->hasMany(CharacterCharacterClass::class, 'class_name');
    }

    public function getKeyAbilityAttribute($value)
    {
        return explode(',', $value);
    }
}