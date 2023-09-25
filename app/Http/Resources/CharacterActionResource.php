<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class CharacterActionResource extends JsonResource
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
            'description' => $this->description,
            'action' => $this->action,
            'traits' => $this->traits,
            'source_book' => $this->source_book,
            'source_page' => $this->source_page,
            'is_spell' => $this->is_spell,
            'components' => $this->components,
            'character_id' => $this->character_id
        ];
    }
}
