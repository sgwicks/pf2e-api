<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class ArmourResource extends JsonResource
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
            'price' => (float)$this->price,
            'armour_class' => $this->armour_class,
            'dex_cap' => $this->dex_cap,
            'check_penalty' => $this->check_penalty,
            'speed_penalty' => $this->speed_penalty,
            'strength' => $this->strength,
            'bulk' => (float)$this->bulk,
            'group' => $this->group,
            'traits' => $this->traits
        ];
    }
}
