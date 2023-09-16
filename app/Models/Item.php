<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Item extends Model
{
    use HasFactory;

    protected $guarded = [
        'id',
        'created_at',
        'updated_at'
    ];

    protected $visible = [
        "name",
        "hardness",
        "max_hp",
        "break_threshold",
    ];

    public function characterItems()
    {
        return $this->hasMany(CharacterItem::class, 'item_name');
    }
}
