<?php

namespace App\Modules\Main\Projects\ProjectImplementationModule\Services;

use App\Modules\Main\Projects\ProjectImplementationModule\ProjectImplementation;

class ShowProjectImplementationService extends CommonProjectImplementationService
{
    public function __invoke($request, $id)
    {
        return $this->logErrors(fn() => $this->show($request, $id));
    }

    private function show($request, $id)
    {
        return ProjectImplementation::findOrFail($id);
    }
}
