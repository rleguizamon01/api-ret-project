<?php

namespace App\Modules\Main\Projects\ProjectDesignModule\Services;

use App\Modules\Main\Projects\ProjectDesignModule\ProjectDesign;

class RestoreProjectDesignService extends CommonProjectDesignService
{
    public function __invoke($id)
    {
        return $this->logErrors(fn() => $this->restore($id));
    }

    private function restore($id)
    {
        return ProjectDesign::withTrashed()->findOrFail($id)->restore();
    }
}
