<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class CharacterProficiencyResource extends JsonResource
{
    /**
     * @param \Illuminate\Http\Request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function ToArray($request)
    {
        return [
            'unarmoured' => $this->unarmoured,
            'light' => $this->light,
            'medium' => $this->medium,
            'heavy' => $this->heavy,
            'unarmed' => $this->unarmed,
            'simple' => $this->simple,
            'martial' => $this->martial
        ];
    }
}
