<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class CharacterSavingThrowResource extends JsonResource
{
    /**
     * @param \Illuminate\Http\Request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function ToArray($request)
    {
        return [
            'id' => $this->id,
            'fortitude' => $this->fortitude,
            'reflex' => $this->reflex,
            'will' => $this->will,
            'character_id' => $this->character_id
        ];
    }
}
