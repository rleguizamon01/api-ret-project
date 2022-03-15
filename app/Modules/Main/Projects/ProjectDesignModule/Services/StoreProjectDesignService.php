<?php

namespace App\Modules\Main\Projects\ProjectDesignModule\Services;

use App\Modules\Main\Projects\ProjectDesignModule\ProjectDesign;
use App\Modules\Main\Projects\ProjectModule\Project;

class StoreProjectDesignService extends CommonProjectDesignService
{
    public function __invoke($request)
    {
        return $this->logErrors(fn() => $this->store($request), true);
    }

    private function store($request)
    {
        $projectId = $this->getProjectId($request);
        $projectDesign = ProjectDesign::create($request->merge(['project_id' => $projectId])->all());
        return $projectDesign;
    }

    private function getProjectId($request): int
    {
        // If the request has forum_post_id, it comes from an idea (project_desisgn_id will be null)
        if($request->filled('forum_post_id')) {
            $project = Project::firstOrCreate(['forum_post_id' => $request->forum_post_id]);
            return $project->id;
        }

        // Otherwise, it is related to a design
        $newProject = Project::create([
            'forum_post_id' => null
        ]);

        return $newProject->id;
    }
}
