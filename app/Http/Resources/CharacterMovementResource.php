<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class CharacterMovementResource extends JsonResource
{
    /**
     * @param \Illuminate\Http\Request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function ToArray($request)
    {
        return [
            'base' => $this->base,
            'burrow' => $this->burrow,
            'climb' => $this->climb,
            'fly' => $this->fly,
            'swim' => $this->swim,
        ];
    }
}
