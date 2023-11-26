<?php

namespace App\Http\Resources;

use App\Http\Resources\WeaponResource;
use Illuminate\Http\Resources\Json\JsonResource;

class CharacterWeaponResource extends JsonResource
{
    /**
     * @param \Illuminate\Http\Request
     * @return  array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($request)
    {
        return [
            ...collect(new WeaponResource($this->weapon)),
            'id' => $this->id,
            'character_id' => $this->character_id,
        ];
    }
}
