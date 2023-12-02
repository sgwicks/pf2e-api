<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Traits\HasName;
use App\Traits\HasTraits;

class Feat extends Model
{
    use HasFactory, HasName, HasTraits;

    /** @var array */
    protected $fillable = [
        'name',
        'description',
        'level',
        'traits',
        'prerequisites'
    ];

    public function setPrerequisitesAttribute($value)
    {
        $this->attributes['prerequisites'] = implode(',', $value);
    }

    public function getPrerequisitesAttribute($value)
    {
        if (!$value) return [];
        return explode(',', $value);
    }

    public function characterFeats()
    {
        return $this->hasMany(CharacterFeat::class, 'feat_id');
    }
}
