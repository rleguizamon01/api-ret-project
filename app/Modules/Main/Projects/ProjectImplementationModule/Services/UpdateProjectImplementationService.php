<?php

namespace App\Modules\Main\Projects\ProjectImplementationModule\Services;

use App\Modules\Main\Projects\ProjectImplementationModule\ProjectImplementation;

class UpdateProjectImplementationService extends CommonProjectImplementationService
{
    public function __invoke($request, $id)
    {
        return $this->logErrors(fn() => $this->update($request, $id), true);
    }

    private function update($request, $id)
    {
        $projectImplementation = ProjectImplementation::findOrFail($id);

        $projectImplementation->update([
            //
        ]);

        return $projectImplementation;
    }
}
