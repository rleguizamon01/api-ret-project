<?php

namespace App\Modules\Main\Projects\ProjectDesignModule\Services;

use App\Modules\Main\Projects\ProjectDesignModule\ProjectDesign;

class UpdateProjectDesignService extends CommonProjectDesignService
{
    public function __invoke($request, $id)
    {
        return $this->logErrors(fn() => $this->update($request, $id), true);
    }

    private function update($request, $id)
    {
        $projectDesign = ProjectDesign::findOrFail($id);

        $projectDesign->update($request->all());

        return $projectDesign;
    }
}
