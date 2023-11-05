<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class CharacterCharacterClassResource extends JsonResource
{
    /**
     * @param \Illuminate\Http\Request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function ToArray($request)
    {
        return [
            'id' => $this->id,
            'name' => $this->characterClass->nameTitleCase,
            'key_ability' => $this->characterClass->key_ability,
            'chosen_ability' => $this->key_ability ?? null,
            'hit_points' => $this->characterClass->hit_points,
            'level' => $this->level
        ];
    }
}
