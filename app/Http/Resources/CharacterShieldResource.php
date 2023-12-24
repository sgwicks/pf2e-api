<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class CharacterShieldResource extends JsonResource
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
            'name' => $this->shield->nameTitleCase,
            'hardness' => $this->shield->hardness,
            'max_hp' => $this->shield->max_hp,
            'break_threshold' => $this->shield->break_threshold,
            'price' => (float)$this->shield->price,
            'bulk' => (float)$this->shield->bulk,
            'armour_class' => $this->shield->armour_class,
            'current_hp' => $this->current_hp,
            'raised' => $this->raised,
        ];
    }
}
