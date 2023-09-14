<?php

namespace Database\Factories\Helpers;

use Illuminate\Database\Eloquent\Factories\HasFactory;

class FactoryHelper
{
    /**
     * This function will get a random id from the database
     * @param string | HasFactory $model
     * @return int $id
     */
    public static function getRandomModelId(string $model) {
        // get model count
        $count = $model::query()->count();

        if($count === 0) {
            // if model count is 0
            // we should create a new record and retrieve the record id
            $id = $model::factory()->create()->id;
        } else {
            // generate a random number between 1 and record count
            $id = rand(1, $count);
        }

        return $id;
    }

    /**
     * This function will get a random id from the database
     * @param string | HasFactory $model
     * @return string $name
     */

    public static function getRandomModelName(string $model) {
        // get model count
        $count = $model::query()->count();

        if ($count === 0) {
            $name = $model::factory()->create();
        } else {
            $name = $model::pluck('name')->random();
        }

        return $name;
    }
}
