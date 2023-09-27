<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreSkillRequest;
use App\Http\Requests\UpdateSkillRequest;
use App\Http\Resources\SkillResource;
use App\Imports\SkillsImport;
use App\Models\Skill;
use App\Services\SkillService;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\ResourceCollection;
use Maatwebsite\Excel\Facades\Excel;

class SkillController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return ResourceCollection
     */
    public function index()
    {
        $skills = Skill::query()->get();

        return SkillResource::collection($skills);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreSkillRequest  $request
     * @return SkillResource
     */
    public function store(StoreSkillRequest $request, SkillService $service)
    {
        $created = $service->create($request);

        return new SkillResource($created);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Skill  $skill
     * @return SkillResource
     */
    public function show(Skill $skill)
    {
        return new SkillResource($skill);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateSkillRequest  $request
     * @param  \App\Models\Skill  $skill
     * @return SkillResource
     */
    public function update(UpdateSkillRequest $request, Skill $skill, SkillService $service)
    {
        $service->update($request, $skill);

        return new SkillResource($skill);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Skill  $skill
     * @return JsonResponse
     */
    public function destroy(Skill $skill, SkillService $service)
    {
        $service->destroy($skill);

        return new JsonResponse(null, 204);
    }

    public function bulkUpload(Request $request)
    {
        Excel::import(new SkillsImport(), $request->file('file'));

        $skills = Skill::query()->get();

        return SkillResource::collection($skills);
    }
}
