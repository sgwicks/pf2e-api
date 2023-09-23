<?php

namespace App\Models;

use App\Traits\HasName;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Heritage extends Model
{
    use HasFactory;
    use HasName;

    protected $guarded = [
        'id',
        'created_at',
        'updated_at'
    ];
}
