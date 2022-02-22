<?php

namespace App\Modules\Main\Projects\ProjectDesignModule\Services;

use App\Modules\Main\Projects\ProjectDesignModule\ProjectDesign;

class ShowProjectDesignService extends CommonProjectDesignService
{
    public function __invoke($request, $id)
    {
        return $this->logErrors(fn() => $this->show($request, $id));
    }

    private function show($request, $id)
    {
        return ProjectDesign::findOrFail($id);
    }
}
