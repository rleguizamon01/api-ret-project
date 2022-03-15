<?php

namespace App\Modules\Main\Projects\ProjectImplementationModule\Services;

use App\Modules\Main\Projects\ProjectDesignModule\ProjectDesign;
use App\Modules\Main\Projects\ProjectImplementationModule\ProjectImplementation;
use App\Modules\Main\Projects\ProjectModule\Project;

class StoreProjectImplementationService extends CommonProjectImplementationService
{
    public function __invoke($request)
    {
        return $this->logErrors(fn() => $this->store($request), true);
    }

    private function store($request)
    {
        $projectId = $this->getProjectId($request);
        $projectImplementation = ProjectImplementation::create($request->merge(['project_id' => $projectId])->all());
        return $projectImplementation;
    }

    private function getProjectId($request): int
    {
        // If the request has forum_post_id, it comes from an idea (a project can exist by another previous design)
        if($request->filled('forum_post_id')) {
            $project = Project::firstOrCreate(['forum_post_id' => $request->forum_post_id]);
            return $project->id;
        }

        // Otherwise, it isn't related to an idea
        $newProject = Project::create([
            'forum_post_id' => null
        ]);

        return $newProject->id;
    }
}
