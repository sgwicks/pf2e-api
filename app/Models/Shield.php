<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Traits\HasName;

class Shield extends Model
{
    use HasFactory, HasName;

    protected $guarded = [
        'id',
        'created_at',
        'updated_at'
    ];

    public function characterShields()
    {
        return $this->hasMany(CharacterShield::class, 'shield_id');
    }
}
