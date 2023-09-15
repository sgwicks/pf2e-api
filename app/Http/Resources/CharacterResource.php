<?php

namespace App\Http\Resources;

use App\Models\Skill;
use Illuminate\Http\Resources\Json\JsonResource;

class CharacterResource extends JsonResource
{
    /**
     * @param \Illuminate\Http\Request
     * @return  array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($request)
    {
        $combinedSkills = $this->skills->map(function ($skill) {
            return [
                'name' => $skill->skill_name,
                'attribute' => $skill->skill->attribute,
                'armour' => $skill->skill->armour,
                'proficiency' => $skill->proficiency,
                'item' => $skill->item
            ];
        });

        $combinedFeats = $this->feats->map(function ($feat) {
            return [
                'name' => $feat->feat_name,
                'description' => $feat->feat->description
            ];
        });

        $combinedCharacterClasses = $this->characterClasses->map(function($characterClass) {
            return [
              'name' => $characterClass->class_name,
              'level' => $characterClass->level,
              'hit_points_per_level' => $characterClass->characterClass->hit_points,
              'attribute_options' => $characterClass->characterClass->key_ability
            ];
        });

        return [
          'id' => $this->id,
          'user' => [
              'id' => $this->user->id,
              'name' => $this->user->name
          ],
          'skills' => $combinedSkills,
          'feats' => $combinedFeats,
          'actions' => $this->actions,
          'character_classes' => $combinedCharacterClasses,
          'items' => $this->items,
        ];
    }
}
