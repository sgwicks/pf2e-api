<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class CharacterSkillResource extends JsonResource
{
    /**
     * @param \Illuminate\Http\Request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function ToArray($request)
    {
        return [
            'id' => $this->id,
            'name' => $this->skill->nameTitleCase,
            'ability' => $this->skill->ability,
            'armour' => $this->skill->armour,
            'proficiency' => $this->proficiency,
            'item' => $this->item,
            'character_id' => $this->character_id
        ];
    }
}
