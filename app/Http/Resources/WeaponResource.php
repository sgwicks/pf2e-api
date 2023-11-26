<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class WeaponResource extends JsonResource
{
    /**
     * @param \Illuminate\Http\Request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function ToArray($request)
    {
        return [
            'id' => $this->id,
            'name' => $this->nameTitleCase,
            'category' => $this->category,
            'range' => $this->range,
            'damage_die_type' => $this->damage_die_type,
            'damage_die_amount' => $this->damage_die_amount,
            'damage_type' => $this->damage_type,
            'hands' => $this->hands,
            'reload' => $this->reload,
            'price' => (float)$this->price,
            'bulk' => (float)$this->bulk,
            'group' => $this->group,
            'traits' => $this->traits,
        ];
    }
}
