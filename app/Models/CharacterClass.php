<?php

namespace App\Models;

use App\Traits\HasName;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use PhpParser\Node\Attribute;

class CharacterClass extends Model
{
    use HasFactory;
    use HasName;

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
        return $this->hasMany(CharacterCharacterClass::class, 'class_id');
    }

    public function getKeyAbilityAttribute($value)
    {
        return explode(',', $value);
    }

    public function setKeyAbilityAttribute($value)
    {

        $this->attributes['key_ability'] = implode(',', $value);
    }
}
