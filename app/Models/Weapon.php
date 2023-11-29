<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Traits\HasName;
use App\Traits\HasTraits;

class Weapon extends Model
{
    use HasFactory, HasName, HasTraits;

    protected $guarded = [
        'id',
        'created_at',
        'updated_at'
    ];

    public function characterWeapons()
    {
        return $this->hasMany(CharacterWeapon::class, 'weapon_id');
    }
}
