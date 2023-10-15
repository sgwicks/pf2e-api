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
//            'characters' => $this->with($request)
        ];
    }

    public function with($request)
    {
        $characters = Character::query()->where('user_id', $request->user()->id)->get();

        return ['characters' => CharacterResource::collection($characters)];
    }
}
