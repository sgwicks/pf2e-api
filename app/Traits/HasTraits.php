<?php

namespace App\Traits;

/**
 * Handles setting and retrieving names
 */
trait HasTraits
{
    public function setTraitsAttribute($value)
    {
        if (!$value) return [];
        return explode(',', $value);
    }

    public function getTraitsAttribute()
    {
        $this->attributes['traits'] = implode(',', $value);
    }
}
