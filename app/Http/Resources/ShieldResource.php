<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class ShieldResource extends JsonResource
{
    /**
     * @param \Illuminate\Http\Request
     * @return  array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($request)
    {
        return [
            'id' => $this->id,
            'name' => $this->nameTitleCase,
            'hardness' => $this->hardness,
            'max_hp' => $this->max_hp,
            'break_threshold' => $this->break_threshold,
            'price' => (float)$this->price,
            'bulk' => (float)$this->bulk,
            'armour_class' => $this->armour_class,
        ];
    }
}
