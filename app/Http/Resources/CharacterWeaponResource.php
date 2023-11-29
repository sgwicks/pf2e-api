<?php

namespace App\Http\Resources;

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
            'id' => $this->id,
            'character_id' => $this->character_id,
            'name' => $this->weapon->nameTitleCase,
            'category' => $this->category ?? $this->weapon->category,
            'range' => $this->range ?? $this->weapon->range,
            'damage_die_type' => $this->damage_die_type ?? $this->weapon->damage_die_type,
            'damage_die_amount' => $this->damage_die_amount ?? $this->weapon->damage_die_amount,
            'damage_type' => $this->damage_type ?? $this->weapon->damage_type,
            'hands' => $this->hands ?? $this->weapon->hands,
            'reload' => $this->reload ?? $this->weapon->reload,
            'price' => (float)$this->price ?? $this->weapon->price,
            'bulk' => (float)$this->bulk ?? $this->weapon->bulk,
            'group' => $this->group ?? $this->weapon->group,
            'traits' => $this->traits ?? $this->weapon->traits,
        ];
    }
}
