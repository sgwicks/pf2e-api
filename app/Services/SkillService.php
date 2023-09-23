<?php

namespace App\Services;

use App\Exceptions\GeneralJsonException;
use App\Http\Requests\StoreSkillRequest;
use App\Http\Requests\UpdateSkillRequest;
use App\Models\Skill;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;

class SkillService
{
    /**
     * @param StoreSkillRequest $request
     * @return Builder|Model
     */
    public function create(StoreSkillRequest $request)
    {
        $created = Skill::query()->create([
            'name' => $request->name,
            'ability' => $request->ability,
            'armour' => $request->armour
        ]);

        return $created;
    }

    public function update(UpdateSkillRequest $request, Skill $skill)
    {
        $updated = $skill->update([
            'name' => $request->name ?? $skill->name,
            'ability' => $request->ability ?? $skill->ability,
            'armour' => $request->armour ?? $skill->armour
        ]);

        if (!$updated) {
            throw new GeneralJsonException('Skill not updated');
        }

        return $updated;
    }

    public function destroy(Skill $skill)
    {
        $deleted = $skill->forceDelete();

        if (!$deleted) {
            throw new GeneralJsonException('Skill not deleted');
        }

        return $deleted;
    }
}
