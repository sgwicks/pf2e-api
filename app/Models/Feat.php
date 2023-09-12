<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Feat extends Model
{
    use HasFactory;

    /** @var array */
    protected $fillable = [
        'name',
        'description'
    ];

    public function characterFeats()
    {
        return $this->hasMany(CharacterFeat::class, 'feat_name');
    }
}
