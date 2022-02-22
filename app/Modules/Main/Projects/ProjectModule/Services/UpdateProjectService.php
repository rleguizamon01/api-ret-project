<?php

namespace App\Modules\Main\Projects\ProjectModule\Services;

use App\Modules\Main\Projects\ProjectModule\Project;

class UpdateProjectService extends CommonProjectService
{
    public function __invoke($request, $id)
    {
        return $this->logErrors(fn() => $this->update($request, $id), true);
    }

    private function update($request, $id)
    {
        $project = Project::findOrFail($id);

        $project->update([
            //
        ]);

        return $project;
    }
}
