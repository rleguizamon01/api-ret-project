<?php

namespace App\Modules\Main\Projects\ProjectImplementationModule\Services;

use App\Modules\Main\Projects\ProjectImplementationModule\ProjectImplementation;

class RestoreProjectImplementationService extends CommonProjectImplementationService
{
    public function __invoke($id)
    {
        return $this->logErrors(fn() => $this->restore($id));
    }

    private function restore($id)
    {
        return ProjectImplementation::withTrashed()->findOrFail($id)->restore();
    }
}
