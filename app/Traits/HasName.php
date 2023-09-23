<?php

namespace App\Traits;

/**
 * Handles setting and retrieving names
 */
trait HasName
{
    public function setNameAttribute($value)
    {
        $this->attributes['name'] = strtolower(str_replace(' ', '_', $value));
    }

    public function getNameTitleCaseAttribute()
    {
        return ucwords(str_replace('_', ' ', $this->name));
    }
}
