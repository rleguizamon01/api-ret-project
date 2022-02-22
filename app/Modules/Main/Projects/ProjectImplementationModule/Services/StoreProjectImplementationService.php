<?php

namespace App\Modules\Main\Projects\ProjectImplementationModule\Services;

use App\Modules\Main\Projects\ProjectImplementationModule\ProjectImplementation;

class StoreProjectImplementationService extends CommonProjectImplementationService
{
    public function __invoke($request)
    {
        return $this->logErrors(fn() => $this->store($request), true);
    }

    private function store($request)
    {
        return ProjectImplementation::create([]);
    }
}
