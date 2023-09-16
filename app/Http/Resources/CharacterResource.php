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
              'attribute_options' => $characterClass->characterClass->key_ability,
            ];
        });

        return [
          'id' => $this->id,
          'name' => $this->name,
          'ancestry' => $this->ancestry,
          'heritage' => $this->heritage,
          'background' => $this->background,
          'size' => $this->size,
          'alignment' => $this->alignment,
          'traits' => $this->traits,
          'deity' => $this->deity,
          'attributes' => [
              'strength' => $this->strength,
              'dexterity' => $this->dexterity,
              'constitution' => $this->constitution,
              'intelligence' => $this->intelligence,
              'wisdom' => $this->wisdom,
              'charisma' => $this->charisma
          ],
          'skills' => $combinedSkills,
          'feats' => $combinedFeats,
          'actions' => $this->actions,
          'character_classes' => $combinedCharacterClasses,
          'items' => $this->items->map(function ($item) {
              return $item->item;
          }),
          'user' => [
              'id' => $this->user->id,
             'name' => $this->user->name
          ],
        ];
    }
}
