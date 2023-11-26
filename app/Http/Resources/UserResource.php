<?php

namespace App\Http\Resources;

use App\Models\Character;
use Illuminate\Http\Resources\Json\JsonResource;

class UserResource extends JsonResource
{
    /**
     * @param \Illuminate\Http\Request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($request)
    {
        return [
            'id' => $this->id,
            'name' => $this->name,
            'email' => $this->email,
            'characters' => $this->getCharacters()
        ];
    }

    public function getCharacters()
    {
        $characters = Character::query()->where('user_id', $this->id)->get();

        return CharacterResource::collection($characters)->map(function ($character) {
            return [
                'id' => $character['id'],
                'name' => $character['name']
            ];
        });
    }
}
