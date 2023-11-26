<?php

namespace App\Http\Resources;

use App\Http\Resources\ArmourResource;
use Illuminate\Http\Resources\Json\JsonResource;

class CharacterArmourResource extends JsonResource
{
    /**
     * @param \Illuminate\Http\Request
     * @return  array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($request)
    {
        return [
            ...collect(new ArmourResource($this->armour)),
            'id' => $this->id,
            'character_id' => $this->character_id,
        ];
    }
}
