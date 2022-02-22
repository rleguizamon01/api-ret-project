<?php

namespace App\Modules\Main\Projects\ProjectDesignModule\Services;

use App\Modules\Main\Projects\ProjectDesignModule\ProjectDesign;

class DestroyProjectDesignService extends CommonProjectDesignService
{
    public function __invoke($id)
    {
        return $this->logErrors(fn() => $this->destroy($id));
    }

    private function destroy($id)
    {
        return ProjectDesign::findOrFail($id)->delete();
    }
}
