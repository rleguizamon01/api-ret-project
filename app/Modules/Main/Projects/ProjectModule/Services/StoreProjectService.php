<?php

namespace App\Modules\Main\Projects\ProjectModule\Services;

use App\Modules\Main\Projects\ProjectModule\Project;

class StoreProjectService extends CommonProjectService
{
    public function __invoke($request)
    {
        return $this->logErrors(fn() => $this->store($request), true);
    }

    private function store($request)
    {
        return Project::create([]);
    }
}
