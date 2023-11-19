<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class CharacterHealthResource extends JsonResource
{
    /**
     * @param \Illuminate\Http\Request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function ToArray($request)
    {
        return [
            'max' => $this->max,
            'current' => $this->current,
            'temporary' => $this->temporary,
            'dying' => $this->dying,
            'wounded' => $this->wounded,
            'resistances' => $this->resistances,
            'weaknesses' => $this->weaknesses,
            'immunities' => $this->immunities,
            'conditions' => $this->conditions,
        ];
    }
}
