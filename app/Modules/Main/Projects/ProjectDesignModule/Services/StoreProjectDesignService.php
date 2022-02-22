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
        if($request->has('project_id') && $request->project_id != null)
            return $request->project_id;

        $newProject = Project::create([
            'forum_post_id' => null
        ]);

        return $newProject->id;
    }
}
