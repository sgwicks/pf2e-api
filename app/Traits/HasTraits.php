<?php

namespace App\Traits;

/**
 * Handles setting and retrieving names
 */
trait HasTraits
{
    public function setTraitsAttribute($value)
    {
        $this->attributes['traits'] = implode(',', $value);
    }

    public function getTraitsAttribute($value)
    {
        if (!$value) return [];
        return explode(',', $value);
    }
}
