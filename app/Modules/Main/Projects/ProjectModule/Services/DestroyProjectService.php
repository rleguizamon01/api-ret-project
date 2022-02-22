<?php

namespace App\Modules\Main\Projects\ProjectModule\Services;

use App\Modules\Main\Projects\ProjectModule\Project;

class DestroyProjectService extends CommonProjectService
{
    public function __invoke($id)
    {
        return $this->logErrors(fn() => $this->destroy($id));
    }

    private function destroy($id)
    {
        return Project::findOrFail($id)->delete();
    }
}
