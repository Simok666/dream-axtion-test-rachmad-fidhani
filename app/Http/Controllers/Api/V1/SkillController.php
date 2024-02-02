<?php

namespace App\Http\Controllers\Api\V1;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Resources\V1\SkillResource;
use App\Http\Resources\V1\SkillCollection;
use App\Models\Skill;
use App\Http\Requests\StoreSkillRequest;

class SkillController extends Controller
{
    /**
     * Skill index data
     */
    public function index() 
    {
        return new SkillCollection(Skill::paginate(1));
    }

    /**
     * Skill show data
     * 
     * @param Skill $skill
     * 
     */
    public function show(Skill $skill) 
    {
        return new SkillResource($skill);
    }

    /**
     * Store skill data
     * 
     * @param StoreSkillRequest $request
     * 
     * @return JsonResponse
     */
    public function store(StoreSkillRequest $request) 
    {
        Skill::create($request->validated());
        return response()->json('Skill Created');

    }

    /**
     * Update skill data
     *
     * @param StoreSkillRequest $request
     * @param Skill $skill
     * 
     * @return JsonResponse
     */
    public function update(StoreSkillRequest $request, Skill $skill)
    {
        $skill->update($request->validated());
        return response()->json('Skill Updated');
    }

    /**
     * Delete skill data
     * 
     * @param Skill $skill
     * 
     * @return JsonResponse
     */
    public function destroy(Skill $skill) 
    {
        $skill->delete();
        return response()->json('Skill Deleted');
    }
}
