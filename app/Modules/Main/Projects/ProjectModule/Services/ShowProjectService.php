<?php

namespace App\Modules\Main\Projects\ProjectModule\Services;

use App\Modules\Main\Projects\ProjectModule\Project;

class ShowProjectService extends CommonProjectService
{
    public function __invoke($request, $id)
    {
        return $this->logErrors(fn() => $this->show($request, $id));
    }

    private function show($request, $id)
    {
        return Project::findOrFail($id);
    }
}
